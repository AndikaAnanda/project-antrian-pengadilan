<?php

namespace App\Http\Controllers;

require base_path('/vendor/autoload.php');

use App\Events\AntrianUpdated;
use App\Models\Ptsp;
use Exception;
use Illuminate\Http\Request;
use Mike42\Escpos\EscposImage;
use Psy\Readline\Hoa\Console;
use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use Mike42\Escpos\PrintConnectors\FilePrintConnector;

class PtspController extends Controller
{
    // function for show the ptsp page
    public function show() {
        return view('user/ptsp', [
            'title' => "Ptsp",
            'stylesheet' => 'ptsp',
            'antrian_umum_umum_dan_keuangan'=> $this->getAntrian('umum', 'umum_dan_keuangan'),
            'antrian_umum_hukum'=> $this->getAntrian('umum', 'hukum'),
            'antrian_umum_phi'=> $this->getAntrian('umum', 'phi'),
            'antrian_umum_tipikor'=> $this->getAntrian('umum', 'tipikor'),
            'antrian_umum_pidana'=> $this->getAntrian('umum', 'pidana'),
            'antrian_umum_perdata'=> $this->getAntrian('umum', 'perdata'),
            'antrian_prioritas_umum_dan_keuangan'=> $this->getAntrian('prioritas', 'umum_dan_keuangan'),
            'antrian_prioritas_hukum'=> $this->getAntrian('prioritas', 'hukum'),
            'antrian_prioritas_phi'=> $this->getAntrian('prioritas', 'phi'),
            'antrian_prioritas_tipikor'=> $this->getAntrian('prioritas', 'tipikor'),
            'antrian_prioritas_pidana'=> $this->getAntrian('prioritas', 'pidana'),
            'antrian_prioritas_perdata'=> $this->getAntrian('prioritas', 'perdata')
        ]);
    }

    public function showDisplay() {
        return view('user/display', [
            'title' => "Display",
            'stylesheet' => 'display',
        ]);
    }

    public function incrementAntrian(Request $req) {
        try {
            date_default_timezone_set('Asia/Jakarta');
            
            $kategoriAntrian = $req->input('kategori_antrian');
            $jenisAntrian = $req->input('jenis_antrian');
            $nomorAntrian = $this->getAntrian($kategoriAntrian, $jenisAntrian);

            // check if the record exist
            $existingData = Ptsp::where('tanggal', date('Y-m-d'))
                ->where('kategori_antrian', $kategoriAntrian)
                ->where('jenis_antrian', $jenisAntrian)
                ->first();

            if ($existingData) {
                // update existing data
                Ptsp::where('kategori_antrian', $kategoriAntrian)
                    ->where('tanggal', date('Y-m-d'))
                    ->where('jenis_antrian', $jenisAntrian)
                    ->increment('jumlah_antrian');
            } else {
                // create new record
                Ptsp::create([
                    'jumlah_antrian' => 1,
                    'kategori_antrian' => $kategoriAntrian,
                    'jenis_antrian' => $jenisAntrian,
                    'tanggal' => date('Y-m-d'),
                    'status' => 'proses'
                ]);
            }

            // broadcast the value realtime
            event(new AntrianUpdated($this->getAntrian($kategoriAntrian, $jenisAntrian), $kategoriAntrian, $jenisAntrian));

            return response()->json([
                'success' => true,
                $kategoriAntrian,
                $jenisAntrian,
                $nomorAntrian,
                $this->printTicket($kategoriAntrian, $jenisAntrian, $nomorAntrian),
                'message' => 'Antrian incremented successfully'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    // function for retrieve nomor_antrian from database
    public function getAntrian($kategoriAntrian, $jenisAntrian) {
        date_default_timezone_set('Asia/Jakarta');

        try {
            $nomorAntrian = Ptsp::where('kategori_antrian', $kategoriAntrian)
            ->where('tanggal', date('Y-m-d'))
            ->where('jenis_antrian', $jenisAntrian)
            ->value('jumlah_antrian') ?? 0;
        } catch (Exception $e) {
            echo "Exception : " . $e->getMessage();
        }
        return $nomorAntrian;
    }

    // function for print ticket
    public function printTicket($kategoriAntrian, $jenisAntrian, $nomorAntrian){
        try {
            // Enter the share name for USB Printer
            $connector = new FilePrintConnector('php://stdout');
            // $connector = new WindowsPrintConnector('EPSON TM-T82 Receipt');

            $printer = new Printer($connector);
            $nomorAntrian += 1;
            $logo = EscposImage::load("img/logo_pn.png");
            $antrianServed = intval(file_get_contents("txt/$kategoriAntrian/$jenisAntrian.txt"));

            $letter = match($jenisAntrian) {
                'umum_dan_keuangan' => 'A',
                'hukum' => 'B',
                'phi' => 'C',
                'tipikor' => 'D',
                'pidana' => 'E',
                'perdata' => 'F',
                default => null,
            };
            if($kategoriAntrian === 'prioritas') {
                $letter = 'P' . $letter;
            }

            // Header
            $printer->setJustification(Printer::JUSTIFY_CENTER);
            $printer->graphics($logo);

            // Title
            $printer->text("Mahkamah Agung Republik Indonesia\n");
            $printer->setEmphasis(true);
            $printer->text("PENGADILAN NEGERI PEKANBARU\n");
            $printer->setEmphasis(false);
            $printer->text("Jl. Teratai No. 85 Sukajadi, Pekanbaru\n");
            $printer->text("-------------------------------------------------------------\n");

            // Content
            $printer->setJustification(Printer::JUSTIFY_LEFT);
            $printer->text("Petugas  : RANDA\n");
            $printer->text("Tanggal  : " . date('d-m-Y H:i:s') . "\n");
            $printer->text("Kategori : $kategoriAntrian\n");
            $printer->text("Jenis    : $jenisAntrian\n");
            $printer->text("-------------------------------------------------------------\n");

            $printer->text("Antrian telah dilayani  : $letter - $antrianServed \n");
            $printer->text("Nomor antrian anda      : $letter - $nomorAntrian\n");

            // Footer
            $printer->setJustification(Printer::JUSTIFY_CENTER);
            $printer->text("-------------------------------------------------------------\n");
            $printer->text("Silakan menunggu dan budayakan antri untuk kenyamanan bersama\n");
            $printer->text("Terima kasih atas kunjungan anda\n");

            // Cut paper
            $printer->cut();

            // Close printer
            $printer->close();

            $output = ob_get_clean();
            echo $output;

            return response()->json([
                'message' => 'Receipt printed successfully'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 500);
        }
    }
}