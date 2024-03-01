<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ptsp;
use App\Events\AntrianUpdated;
use App\Events\UpdateAntrianDipanggil;
use Exception;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

class AdminController extends Controller
{
    public function index() {
        return view('admin/dashboard');
    }

    public function showCall($type) {
        $letter = match($type) {
            'umum_dan_keuangan' => 'A',
            'hukum' => 'B',
            'phi' => 'C',
            'tipikor' => 'D',
            'pidana' => 'E',
            'perdata' => 'F',
            default => null,
        };
        return view('admin/call', [
            'jenis' => $type,
            'letter' => $letter,
            'jumlahAntrianUmum' => $this->getAntrian('umum', $type),
            'jumlahAntrianPrioritas' => $this->getAntrian('prioritas', $type)
        ]);
    }

    public function showRecap($time) {
        date_default_timezone_set('Asia/Jakarta');

        if ($time === 'today') {
            $timeTitle = 'Today';
            $data = Ptsp::where('tanggal', date('Y-m-d'))->get();
        } else if ($time === 'week') {
            $timeTitle = 'This Week';
            $data = Ptsp::whereBetween('tanggal', [now()->startOfWeek(), now()->endOfWeek()])->get();
        } else if ($time === 'month') {
            $timeTitle = 'This Month';
            $data = Ptsp::whereYear('tanggal', now()->year)->whereMonth('tanggal', now()->month)->get();
        } else if ($time === 'all') {
            $timeTitle = 'All';
            $data = Ptsp::all();
        }

        return view('admin/recap', [
            'recapData' => $data,
            'index' => 0,
            'time' => $time,
            'timeTitle' => $timeTitle
        ]);
    }

    // function for retrieve nomor_antrian from database
    public function getAntrian($kategoriAntrian, $jenisAntrian) {
        date_default_timezone_set('Asia/Jakarta');

        try {
            $existingData = Ptsp::where('kategori_antrian', $kategoriAntrian)
            ->where('tanggal', date('Y-m-d'))
            ->where('jenis_antrian', $jenisAntrian)
            ->first();

            if(!$existingData) {
                $this->resetTxt($kategoriAntrian, $jenisAntrian);
            }

            $nomorAntrian = Ptsp::where('kategori_antrian', $kategoriAntrian)
            ->where('tanggal', date('Y-m-d'))
            ->where('jenis_antrian', $jenisAntrian)
            ->value('jumlah_antrian') ?? 0;

        } catch (Exception $e) {
            echo "Exception : " . $e->getMessage();
        }
        return $nomorAntrian;
    }

    public function update($category, $type) {
        $filePath = "txt/$category/$type.txt";
        $currentValue = intval(file_get_contents($filePath));
        $currentValue++;
        file_put_contents($filePath, $currentValue);
        // Return the new value as a response
        echo $currentValue;

        // Broadcast the value in realtime
        event(new UpdateAntrianDipanggil($currentValue, $category, $type));
    }

    public function showReset() {
        return view('admin/reset');
    }

    public function resetAntrian($category, $type) {
        Ptsp::where('tanggal', date('Y-m-d'))
        ->where('kategori_antrian', $category)
        ->where('jenis_antrian', $type)
        ->delete();
    }

    public function resetAllAntrian() {
        Ptsp::where('tanggal', date('Y-m-d'))
        ->delete();
    }

    public function resetTxt($category, $type) {
        $filePath = "txt/$category/$type.txt";
        file_put_contents($filePath, 0);
    }

    // export data from database to excel file
    public function exportToExcel($time) {
        date_default_timezone_set('Asia/Jakarta');

        if ($time === 'today') {
            $recapData = Ptsp::where('tanggal', date('Y-m-d'))->get();
        } else if ($time === 'week') {
            $recapData = Ptsp::whereBetween('tanggal', [now()->startOfWeek(), now()->endOfWeek()])->get();
        } else if ($time === 'month') {
            $recapData = Ptsp::whereYear('tanggal', now()->year)->whereMonth('tanggal', now()->month)->get();
        } else if ($time === 'all') {
            $recapData = Ptsp::all();
        }

        $spreadsheet = new Spreadsheet();

        // Create the worksheet
        $worksheet = $spreadsheet->getActiveSheet();
        $worksheet->setCellValue('A1', 'No.');
        $worksheet->setCellValue('B1', 'Kategori');
        $worksheet->setCellValue('C1', 'Jenis');
        $worksheet->setCellValue('D1', 'Jumlah Antrian');
        $worksheet->setCellValue('E1', 'Tanggal');

        // Populate the data
        $row = 2;
        foreach ($recapData as $index => $data) {
            $worksheet->setCellValue('A' . $row, $index + 1);
            $worksheet->setCellValue('B' . $row, ucwords($data->kategori_antrian));
            $worksheet->setCellValue('C' . $row, ucwords(str_replace('_', ' ', $data->jenis_antrian)));
            $worksheet->setCellValue('D' . $row, $data->jumlah_antrian);
            $worksheet->setCellValue('E' . $row, \Carbon\Carbon::parse($data->tanggal)->format('d-m-Y'));
            $row++;
        }

        // Create the response
        $response = response()->stream(
            function () use ($spreadsheet) {
                $writer = new Xlsx($spreadsheet);
                $writer->save('php://output');
            },
            200,
            [
                'Content-Type'        => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'Content-Disposition' => 'attachment;filename=recap_data.xlsx',
                'Cache-Control'       => 'max-age=0',
            ]
        );

        return $response;
    }
}
