<?php

namespace App\Http\Controllers;

use App\Models\Ptsp;
use Exception;
use Illuminate\Http\Request;
use Psy\Readline\Hoa\Console;

class PtspController extends Controller
{
    // function for show the ptsp page
    public function show() {
        return view('ptsp', [
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

    public function incrementAntrian(Request $req) {
        try {
            date_default_timezone_set('Asia/Jakarta');
            
            $kategoriAntrian = $req->input('kategori_antrian');
            $jenisAntrian = $req->input('jenis_antrian');

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
                    'tanggal' => date('Y-m-d')
                ]);
            }

            return response()->json([
                'success' => true,
                $kategoriAntrian,
                $jenisAntrian,
                $this->getAntrian($kategoriAntrian, $jenisAntrian),
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
}