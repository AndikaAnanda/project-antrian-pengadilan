<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ptsps', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah_antrian');
            $table->enum('kategori_antrian', [
                'umum',
                'prioritas'
            ]);
            $table->enum('jenis_antrian', [
                'umum_dan_keuangan',
                'hukum',
                'phi',
                'tipikor',
                'pidana',
                'perdata', 
            ]);
            $table->date('tanggal')->useCurrent();
            $table->enum('status_antrian', [
                'proses',
                'selesai'
            ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ptsps');
    }
};
