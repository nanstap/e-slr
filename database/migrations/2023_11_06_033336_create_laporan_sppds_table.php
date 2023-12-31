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
        Schema::create('laporan_sppds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('st_id')->nullable();
            $table->foreignId('sppd_id')->nullable();
            $table->date('tgl_pergi')->nullable();
            $table->string('maskapai_pergi')->nullable();
            $table->string('kode_booking_pergi')->nullable();
            $table->string('no_tiket_pergi')->nullable();
            $table->string('harga_pergi')->nullable();
            $table->integer('taksi_asal_pergi')->nullable();
            $table->integer('taksi_tujuan_pergi')->nullable();
            $table->date('tgl_pulang')->nullable();
            $table->string('maskapai_pulang')->nullable();
            $table->string('kode_booking_pulang')->nullable();
            $table->string('no_tiket_pulang')->nullable();
            $table->string('harga_pulang')->nullable();
            $table->integer('taksi_asal_pulang')->nullable();
            $table->integer('taksi_tujuan_pulang')->nullable();
            $table->string('kota_tujuan')->nullable();
            $table->integer('jumlah_hari_lumsum')->nullable();
            $table->integer('total_lumsum')->nullable();
            $table->date('tgl_masuk_hotel')->nullable();
            $table->date('tgl_keluar_hotel')->nullable();
            $table->integer('jumlah_hari_hotel')->nullable();
            $table->string('nama_hotel')->nullable();
            $table->integer('no_kamar')->nullable();
            $table->integer('tarif')->nullable();
            $table->integer('total')->nullable();
            $table->string('bukti')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_sppds');
    }
};
