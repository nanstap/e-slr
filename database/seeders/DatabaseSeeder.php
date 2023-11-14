<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //\App\Models\Pegawai::factory()->create();

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
        ]);

        \App\Models\Pegawai::factory()->create([
                
            'nama' => 'Nur Hidayanto, S.T.,M.T.',
            'nip' => 197306252003121001,
            'jabatan' => 'Koordinator Rencana Dan Laporan',
            'gol' => 'IV/a',
            'status' => 'SLR',
            'unit' => 'SDL',
        ]);
        \App\Models\Pegawai::factory()->create([//2
            'nama' => 'Fajar Rahmadhy, S.T.',
            'nip' => 198703242015031003,
            'jabatan' => 'Subkoordinator Rencana dan Program',
            'gol' => 'III/c',
            'status' => 1,
            'unit' => 'SDL',
        ]);
        \App\Models\Pegawai::factory()->create([//3
            'nama' => 'Sansuadi, S.Kom., M.B.A.',
            'nip' => 197705042005021001,
            'jabatan' => 'Subkoordinator Pengelolaan Data dan Informasi',
            'gol' => 'IV/a',
            'status' => 1,
            'unit' => 'SDL',
        ]);
        \App\Models\Pegawai::factory()->create([//4
            'nama' => 'Khairiah Dewi, S.T.',
            'nip' => 199212142015032002,
            'jabatan' => 'Subkoordinator Evaluasi dan Laporan',
            'gol' => 'III/b',
            'status' => 1,
            'unit' => 'SDL',
        ]);
        \App\Models\Pegawai::factory()->create([//5
            'nama' => 'Frico Dian Putra, S.T.',
            'nip' => 198709162014021003,
            'jabatan' => 'Subkoordinator Penyiapan Bahan Strategis',
            'gol' => 'III/c',
            'status' => 1,
            'unit' => 'SDL',
        ]);
        \App\Models\Pegawai::factory()->create([//6
            'nama' => 'Zaenal,  S.E.',
            'nip' => 196601081993031001,
            'jabatan' => 'Analis Perencanaan, Evaluasi, dan Pelaporan',
            'gol' => 'III/d',
            'status' => 1,
            'unit' => 'SDL',
        ]);
        \App\Models\Pegawai::factory()->create([//7
            'nama' => 'Warsito, S.E.',
            'nip' => 197604242007011001,
            'jabatan' => 'Analis Perencanaan, Evaluasi, dan Pelaporan',
            'gol' => 'III/c',
            'status' => 1,
            'unit' => 'SDL',
        ]);
        \App\Models\Pegawai::factory()->create([//8
            'nama' => 'Sankara Cinthadiliaga, S.T., M.Sc.',
            'nip' => 198506012015032001,
            'jabatan' => 'Analis Kebijakan Ahli Pertama',
            'gol' => 'III/b',
            'status' => 1,
            'unit' => 'SDL',
        ]);
        \App\Models\Pegawai::factory()->create([//9
            'nama' => 'Ulung Sukmana',
            'nip' => 196708261991031002,
            'jabatan' => 'Pengadministrasi Umum',
            'gol' => 'III/b',
            'status' => 1,
            'unit' => 'SDL',
        ]);
        \App\Models\Pegawai::factory()->create([//10
            'nama' => 'Syifaul Barir, S.T.',
            'nip' => 198512072014021001,
            'jabatan' => 'Perencana Ahli Pertama',
            'gol' => 'III/b',
            'status' => 1,
            'unit' => 'SDL',
        ]);
        \App\Models\Pegawai::factory()->create([//11
            'nama' => 'Rahmad Cahyo Nugroho, S.T.',
            'nip' => 199010102015031006,
            'jabatan' => 'Perencana Ahli Pertama',
            'gol' => 'III/b',
            'status' => 1,
            'unit' => 'SDL',
        ]);
        \App\Models\Pegawai::factory()->create([//12
            'nama' => 'Virbyansah Achmadan Nurrohman, S.T.',
            'nip' => 199602212019021002,
            'jabatan' => 'Pranata Komputer Ahli Pertama',
            'gol' => 'III/a',
            'status' => 1,
            'unit' => 'SDL',
        ]);
        \App\Models\Pegawai::factory()->create([//13
            'nama' => 'Additya Fitroh Firmansyah, S.Kom.',
            'nip' => 199104162019021001,
            'jabatan' => 'Pranata Komputer Ahli Pertama',
            'gol' => 'III/a',
            'status' => 1,
            'unit' => 'SDL',
        ]);
        \App\Models\Pegawai::factory()->create([//14
            'nama' => 'Aslan Firdaus, S.E.',
            'nip' => 197910152006041002,
            'jabatan' => 'Analis Perencanaan, Evaluasi, dan Pelaporan',
            'gol' => 'III/a',
            'status' => 1,
            'unit' => 'SDL',
        ]);
        \App\Models\Pegawai::factory()->create([//15
            'nama' => 'Bayu Seno Adi Nugroho, S.T.',
            'nip' => 199412162020121006,
            'jabatan' => 'Perencana Ahli Pertama',
            'gol' => 'III/a',
            'status' => 1,
            'unit' => 'SDL',
        ]);
        \App\Models\Pegawai::factory()->create([//16
            'nama' => 'Nur Mazidah, S.Si.',
            'nip' => 198508182023212036,
            'jabatan' => 'Statistisi Ahli Pertama',
            'gol' => 'III/a',
            'status' => 1,
            'unit' => 'SDL',
        ]);
        \App\Models\Pegawai::factory()->create([//17
            'nama' => 'Annisa Lintang Nityasmi, S.T.',
            'nip' => 199409272023212029,
            'jabatan' => 'Perencana Ahli Pertama',
            'gol' => 'III/a',
            'status' => 1,
            'unit' => 'SDL',
        ]);
        \App\Models\Pegawai::factory()->create([//18
            'nama' => 'Ajat Munajat',
            'nip' => 3603111702770001,
            'jabatan' => 'Pengelola IT',
            'gol' => 'III/a',
            'status' => 1,
            'unit' => 'SDL',
        ]);
        \App\Models\Pegawai::factory()->create([//19
            'nama' => 'Agah Muhammad Abduh',
            'nip' => 3205381209900004,
            'jabatan' => 'Pengelola IT',
            'gol' => 'III/a',
            'status' => 1,
            'unit' => 'SDL',
        ]);
        \App\Models\Pegawai::factory()->create([//20
            'nama' => 'Reynaldo Vasqulino',
            'nip' => 3275052009910018,
            'jabatan' => 'Pengelola IT',
            'gol' => 'III/a',
            'status' => 1,
            'unit' => 'SDL',
        ]);

        \App\Models\Pegawai::factory()->create([//sus
            'nama' => 'Hekal Misbach',
            'nip' => 6666,
            'jabatan' => 'Pron En Enjoyer',
            'gol' => 'WIBU',
            'status' => 2,
            'unit' => 'SDL',
        ]);

        \App\Models\Pegawai::factory()->create([//sus
            'nama' => 'Ariya Muhammad',
            'nip' => 10310,
            'jabatan' => 'Bandar Sabu',
            'gol' => 'DPO',
            'status' => 2,
            'unit' => 'SDL',
        ]);

        \App\Models\Pegawai::factory()->create([//sus
            'nama' => 'Ananta Zakaria Achmad',
            'nip' => 10310,
            'jabatan' => 'Direktur',
            'gol' => 'Kasta Brahmana',
            'status' => 2,
            'unit' => 'SDL',
        ]);

        
        \App\Models\Sppd::factory()->create([
                'id' => 1,
                // 'no_spm' => 0, 
                'no_sp2d' => 0, 
                'tgl_sp2d' => '0001-01-01'
        ]);
        \App\Models\LaporanSppd::create([
                'id' => 1,
                'st_id' => 1,
                'sppd_id' => 1,
                'tgl_pergi' => '2024-02-10',
                'maskapai_pergi' => 'N/A', 
                'kode_booking_pergi' => 'N/A',  
                'no_tiket_pergi' => 'N/A', 
                'harga_pergi' => 0,
                'taksi_asal_pergi' => 55000,
                'taksi_tujuan_pergi' => 20000,  
                'tgl_pulang' => '0001-01-01', 
                'maskapai_pulang' => 'N/A', 
                'kode_booking_pulang' => 'N/A',    
                'no_tiket_pulang' => 'N/A', 
                'harga_pulang' => 0, 
                'taksi_asal_pulang' => 30000,
                'taksi_tujuan_pulang' => 25000,
                'tgl_masuk_hotel' => '0001-01-01', 
                'tgl_keluar_hotel' => '0001-01-01', 
                'jumlah_hari_hotel' => 0, 
                'nama_hotel' => 'N/A', 
                'no_kamar' => 0, 
                'tarif' => 0,
                'total' => 0,
                'bukti' => 'wew.png'
        ]);
        \App\Models\Sppd::factory()->create([
            'id' => 2,
            'no_sp2d' => 923819, 
            'tgl_sp2d' => '2023-09-11', 
        ]);
        \App\Models\LaporanSppd::create([
            'id' => 2,
            'st_id' => 1,
            'sppd_id' => 1,
            'tgl_pergi' => '2024-02-10',
            'maskapai_pergi' => 'Nigair Lines', 
            'kode_booking_pergi' => 'N1G3R21',  
            'no_tiket_pergi' => '0232', 
            'harga_pergi' => 2000000,
            'taksi_asal_pergi' => 55000,
            'taksi_tujuan_pergi' => 20000, 
            'tgl_pulang' => '2023-09-13', 
            'maskapai_pulang' => 'Kapten Agung', 
            'kode_booking_pulang' => 'QWERTY42',    
            'no_tiket_pulang' => '201921', 
            'harga_pulang' => 1500000,
            'taksi_asal_pulang' => 55000,
            'taksi_tujuan_pulang' => 20000, 
            'tgl_masuk_hotel' => '2023-09-11', 
            'tgl_keluar_hotel' => '2023-09-13', 
            'jumlah_hari_hotel' => 2, 
            'nama_hotel' => 'Mas Hardin Erotic Hotels', 
            'no_kamar' => 20, 
            'tarif' => 550000 ,
            'total' => 1500000,
            'bukti' => 'papuamerdeka.jpeg'
        ]);

        \App\Models\SuratTugas::create([
            'nmr_srt_tgs' => 246,
            'tgl_srt_tgs' => '2023-10-20',
            'pegawai_id' => 23,
            'unit' => 'SDL',
            'tgl_perjadin_mulai' => '2023-10-20',
            'tgl_perjadin_selesai' => '2023-10-30',
            'kota_asal' => 'Jakarta',
            'kota_tujuan' => 'Semarang',
            'uraian_tugas' => 'Beli Lumpia Banyak',
            'no_nodin' => 9862,
            'no_sppd' => 2,
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
