<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pegawai>
 */
class PegawaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
                // [
                //     'nama' => 'Nur Hidayanto, S.T.,M.T.',
                //     'nip' => 197306252003121001,
                //     'jabatan' => 'Koordinator Rencana Dan Laporan',
                //     'gol' => 'IV/A',
                //     'status' => 1,
                //     'unit' => 'SDL',
                // ], [
                //     'nama' => 'Nur Nanta, S.T.,M.T.',
                //     'nip' => 197306252003121001,
                //     'jabatan' => 'Koordinator Rencana Dan Laporan',
                //     'gol' => 'IV/A',
                //     'status' => 1,
                //     'unit' => 'SDL',

                // ]
        ];
        
    }
}
