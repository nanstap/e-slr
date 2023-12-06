<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models;
use App\Models\LaporanSppd;
use App\Models\SuratTugas;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\Exportable;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use Maatwebsite\Excel\Concerns\WithEvents;
use PhpOffice\PhpSpreadsheet\Style\Fill;


class Rekap implements WithHeadings, ShouldAutoSize, WithMapping, WithStyles, WithEvents, FromQuery
{

    use Exportable;

    /**
    * @return \Illuminate\Support\Collection
    */

    //protected $SuratTugas;
    public function query()
    {
        return DB::table('surat_tugas')
            ->leftJoin('pegawais', 'surat_tugas.pegawai_id', '=', 'pegawais.id')
            ->leftJoin('spms', 'surat_tugas.spm_id', '=', 'spms.id')
            ->leftJoin('laporan_sppds', 'surat_tugas.id', '=', 'laporan_sppds.st_id')
            ->leftJoin('sppds', 'laporan_sppds.sppd_id', '=', 'sppds.id')
            ->select('surat_tugas.*', 'pegawais.nama', 'spms.*', 'laporan_sppds.*', 'laporan_sppds.kota_tujuan as kota_lumsum' ,'sppds.*')
            ->orderBy('surat_tugas.id', 'asc');
    }
    // public function collection()
    // {
    //     // return $SuratTugas = SuratTugas::with('spm', 'sppd', 'laporan')->select('*')->addSelect(['created_at', 'updated_at'])->get();
    //     $SuratTugas = SuratTugas::with('spm', 'laporan')->select('*')->get();
    //     $laporan = LaporanSppd::with('st', 'sppd')->select('*')->get();

    //     $collectSurat = $SuratTugas->map(function ($item) {
    //         return [
    //             $item->nmr_srt_tgs,
    //             $item->tgl_srt_tgs,
    //             $item->pegawai->nama,
    //             $item->unit,
    //             $item ->tgl_perjadin_mulai,                
    //             $item->tgl_perjadin_selesai,
    //             $item->kota_asal,
    //             $item->kota_tujuan,
    //             $item->uraian_tugas,
    //             $item->no_nodin,

    //         ];
    //     });

    // }

    

    public function headings(): array
    {
        return [
     
            ['Rekapitulasi Surat Tugas', '', '', '', ''],
            ['Surat Tugas', '', 'Informasi Pegawai','','Tanggal Perjadin','', 'Kota', '', 'Rincian Tugas','','Pembayaran', '', '','','', 'Perjalanan Dinas', '', '', '', '','','','','','','Hotel/Penginapan', '', '', '', '','','Uang Harian','','','Total Keseluruhan'],
            [
            'Nomor',
            'Tanggal', 
            'Nama', 
            'Unit kerja',
            'Mulai',
            'Selesai',
            'Asal',
            'Tujuan',
            'Uraian Tugas',
            'No Nota Dinas',
            'SPM',
            'SPPD',
            'Tanggal SPPD',
            'SP2D',
            'Tanggal SP2D',
            'Tanggal Pergi',
            'Maskapai Pergi',
            'Kode Booking Pergi',
            'No Tiket Pergi',
            'Harga Pergi',
            'Tanggal Pulang',
            'Maskapai Pulang',
            'Kode Booking Pulang',
            'No Tiket Pulang',
            'Harga Pergi',
            'Masuk Hotel',
            'Keluar Hotel',
            'Jumlah Hari',
            'Nama Hotel',
            'No Kamar',
            'Tarif',
            'Kota',
            'Jumlah Hari',
            'Total',
            'TOTAL',
            
            ]
        ];
    }

    public function map($row): array
    { 
        return [
            $row->nmr_srt_tgs,
            $row->tgl_srt_tgs,
            $row->nama,
            $row->unit,
            // $row->pegawai->nama,
            // $row->unit,
            $row->tgl_perjadin_mulai,
            $row->tgl_perjadin_selesai,
            $row->kota_asal,
            $row->kota_tujuan,
            $row->uraian_tugas,
            $row->no_nodin,
            $row->no_spm,
            $row->no_sp2d,
            $row->tgl_sp2d,
            $row->nosp2d,
            $row->tgll_sp2d,
            $row->tgl_pergi,
            $row->maskapai_pergi,
            $row->kode_booking_pergi,
            $row->no_tiket_pergi,
            $row->harga_pergi,
            // $row->taksi_asal_pergi,
            // $row->taksi_tujuan_pergi,
            $row->tgl_pulang,
            $row->maskapai_pulang,
            $row->kode_booking_pulang,
            $row->no_tiket_pulang,
            $row->harga_pulang,
            // $row->taksi_asal_pulang,
            // $row->taksi_tujuan_pulang,
            $row->tgl_masuk_hotel,
            $row->tgl_keluar_hotel,
            $row->jumlah_hari_hotel,
            $row->nama_hotel,
            $row->jumlah_hari_hotel,
            $row->tarif,
            $row->kota_lumsum,
            $row->jumlah_hari_lumsum,
            $row->total_lumsum,
            $row->total


        ];
            
            // $SuratTugas->sppd->no_spm,
            // $SuratTugas->sppd->no_sp2d,
            // $SuratTugas->sppd->tgl_sp2d,
            // $SuratTugas->sppd->tgl_pergi,
            // $SuratTugas->sppd->maskapai_pergi,
            // $SuratTugas->sppd->kode_booking_pergi,
            // $SuratTugas->sppd->no_tiket_pergi,
            // $SuratTugas->sppd->harga_pergi,
            // $SuratTugas->sppd->tgl_pulang,
            // $SuratTugas->sppd->maskapai_pulang,
            // $SuratTugas->sppd->kode_booking_pulang,
            // $SuratTugas->sppd->no_tiket_pulang,
            // $SuratTugas->sppd->harga_pulang,
            // $SuratTugas->sppd->tgl_masuk_hotel,
            // $SuratTugas->sppd->tgl_keluar_hotel,
            // $SuratTugas->sppd->jumlah_hari_hotel,
            // $SuratTugas->sppd->nama_hotel,
            // $SuratTugas->sppd->no_kamar,
            // $SuratTugas->sppd->tarif
            
        
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A2:AI2')->applyFromArray([
            'fill' => [
                'fillType' => Fill::FILL_SOLID,
                'startColor' => [
                    'argb' => 'FFFF00', // Warna latar belakang
                ]
            ],
            'font' => [
                'color' => [
                    'rgb' => '#000000', // Warna teks
                ],
                'bold' => true,
                'size' => 12,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ],

            'borders' => [
                'allBorders' => [
                    'borderStyle' => 'thin'
                ]
            ]
        ]);

        $sheet->getStyle('A1:AI1')->applyFromArray([
            'fill' => [
                'fillType' => Fill::FILL_SOLID,
                'startColor' => [
                    'argb' => 'FFFF00', // Warna latar belakang
                ]
            ],
            'font' => [
                'color' => [
                    'rgb' => '#000000', // Warna teks
                ],
                'bold' => true,
                'size' => 30,

            ],
            
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ],

            'borders' => [
                'allBorders' => [
                    'borderStyle' => 'thin'
                ]
            ]
        ]);
        $sheet->getStyle('A3:AI3')->applyFromArray([
            'fill' => [
                'fillType' => Fill::FILL_SOLID,
                'startColor' => [
                    'argb' => 'FFFF00', // Warna latar belakang
                ]
            ],
            'font' => [
                'bold' => true,
            ],

            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => 'thin'
                ]
            ]
        ]);

        $sheet->getStyle('A1:AI1')->getFont()->setName('Calibri')->setSize(19);

        $sheet->mergeCells('A1:AI1');
        $sheet->mergeCells('A2:B2');
        $sheet->mergeCells('C2:D2');
        $sheet->mergeCells('E2:F2');
        $sheet->mergeCells('G2:H2');
        $sheet->mergeCells('I2:J2');
        $sheet->mergeCells('K2:O2');
        $sheet->mergeCells('P2:Y2');
        $sheet->mergeCells('Z2:AE2');
        $sheet->mergeCells('AF2:AH2');



        
    }
    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet   $event) {
                $sheet = $event->sheet;

                // Melakukan merge cell pada baris 1 dan kolom A sampai C
                $sheet->mergeCells('A1:AI1');

                // Mengatur alignment teks ke tengah
                $sheet->getStyle('A1:AI1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
            },
        ];
    }
}


