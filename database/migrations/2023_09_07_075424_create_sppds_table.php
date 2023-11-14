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
            // $table->string('no_spm')->nullable();
            $table->date('tgl_sp2d')->nullable();
            $table->integer('no_sp2d')->nullable();
            $table->string('upload_sppd')->nullable();
            // $table->date('tgl_pergi')->nullable();
            // $table->foreignId('laporan_id')->nullable()->default(0);
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
