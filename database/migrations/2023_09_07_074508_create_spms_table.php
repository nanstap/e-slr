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
        Schema::create('spms', function (Blueprint $table) {
            $table->id();
            $table->string('no_spm')->nullable();
            $table->date('tgl_spm');
            $table->integer('nosp2d')->nullable();
            $table->date('tgll_sp2d')->nullable();
            $table->string('doc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spms');
    }
};
