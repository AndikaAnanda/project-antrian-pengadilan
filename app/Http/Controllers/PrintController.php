<?php

namespace App\Http\Controllers;

require __DIR__ . '/vendor/autoload.php';

use Exception;
use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;

use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function printReceipt(){
        try {
            // Enter the share name for USB Printer
            $connector = new WindowsPrintConnector('EPSON TM-T82 Receipt');
            $printer = new Printer($connector);

            // Header
            $printer->text("Petugas : RANDA\n");
            $printer->text("Tanggal : " . date('Y-m-d H:i:s') . "\n");
            $printer->text("Loket   : Umum\n");
            $printer->text("------------------------------------------------------\n");

            // Content
            $printer->text("");
            $printer->text("");
            $printer->text("Dilayani saat ini  :");
            $printer->text("Nomor antrian anda :");

            // Footer
            $printer->text("------------------------------------------------------\n");
            $printer->text("Budayakan antri untuk kenyamanan bersama\n");
            $printer->text("Terima kasih atas kunjungan anda\n");

            // Cut paper
            $printer->cut();

            // Close printer
            $printer->close();

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
