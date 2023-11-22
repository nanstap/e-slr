<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpOffice\PhpSpreadsheet\Worksheet\AutoFilter\Column;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('surat_tugas', function (Blueprint $table) {
            $table->id();
            $table->string('nmr_srt_tgs', 100)->default('belum di isi');
            $table->date('tgl_srt_tgs');
            $table->string('upload_st')->nullable();
            $table->foreignId('pegawai_id');
            $table->string('unit');
            $table->date('tgl_perjadin_mulai')->nullable();
            $table->date('tgl_perjadin_selesai')->nullable();
            $table->string('kota_asal')->nullable()->default('Jakarta');
            $table->string('kota_tujuan')->nullable();
            $table->string('uraian_tugas')->nullable();
            $table->string('no_nodin')->nullable();
            $table->string('upload_nd')->nullable();
            $table->string('upload_sp')->nullable();
            // $table->foreignId('no_sppd')->nullable();
            $table->foreignId('spm_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_tugas');
    }
};
