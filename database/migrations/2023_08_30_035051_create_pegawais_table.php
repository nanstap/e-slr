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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100)->default('belum input');
            $table->biginteger('nip')->unsigned()->nullable()->default(0);
            $table->string('jabatan');
            $table->string('gol')->default('III/A');
            $table->enum('status', ['SLR', 'NON SLR'])->default('SLR');
            $table->string('unit', 100)->nullable()->default('SDL');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
        Schema::dropIfExists('pegawais');
    }
};
