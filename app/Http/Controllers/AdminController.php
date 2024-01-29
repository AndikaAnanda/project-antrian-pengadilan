<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ptsp;
use Exception;

class AdminController extends Controller
{
    public function index() {
        return view('admin/dashboard');
    }

    public function showCall($type) {
        return view('admin/call', [
            'jenis' => $type,
            'jumlahAntrianUmum' => $this->getAntrian('umum', $type),
            'jumlahAntrianPrioritas' => $this->getAntrian('prioritas', $type)
        ]);
    }

    public function showRecap() {
        $data = Ptsp::all();

        return view('admin/recap', [
            'recapData' => $data,
            'index' => 0
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
    }

    public function resetTxt($category, $type) {
        $filePath = "txt/$category/$type.txt";
        file_put_contents($filePath, 0);
    }
}
