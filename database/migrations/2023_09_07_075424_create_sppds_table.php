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
        Schema::create('sppds', function (Blueprint $table) {
            $table->id();
            //$table->date('tgl_spm')->nullable();
            $table->string('no_spm')->nullable();
            $table->date('tgl_sp2d')->nullable();
            $table->integer('no_sp2d')->nullable();
            $table->date('tgl_pergi')->nullable();
            $table->string('maskapai_pergi')->nullable();
            $table->string('kode_booking_pergi')->nullable();
            $table->string('no_tiket_pergi')->nullable();
            $table->string('harga_pergi')->nullable();
            $table->date('tgl_pulang')->nullable();
            $table->string('maskapai_pulang')->nullable();
            $table->string('kode_booking_pulang')->nullable();
            $table->string('no_tiket_pulang')->nullable();
            $table->string('harga_pulang')->nullable();
            $table->date('tgl_masuk_hotel')->nullable();
            $table->date('tgl_keluar_hotel')->nullable();
            $table->integer('jumlah_hari_hotel')->nullable();
            $table->string('nama_hotel')->nullable();
            $table->integer('no_kamar')->nullable();
            $table->integer('tarif')->nullable();
            $table->integer('total')->nullable()->default(0);
            $table->enum('status', ['active', 'deactive'])->default('active');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sppds');
    }
};
