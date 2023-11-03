<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models;
use App\Models\SuratTugas;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use Maatwebsite\Excel\Concerns\WithEvents;
use PhpOffice\PhpSpreadsheet\Style\Fill;


class Rekap implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping, WithStyles, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */

    //protected $SuratTugas;

    public function collection()
    {
        return $SuratTugas = SuratTugas::with('pegawai', 'sppd')->select('*')->addSelect(['created_at', 'updated_at'])->get();
    }

    

    public function headings(): array
    {
        return [
     
            ['Rekapitulasi Surat Tugas', '', '', '', ''],
            ['Surat Tugas', '', 'Informasi Pegawai','','Tanggal Perjadin','', 'Kota', '', 'Rincian Tugas','','Pembayaran', '', '', 'Perjalanan Dinas', '', '', '', '','','','','','','Hotel/Penginapan'],
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
            'Total'
            
            ]
        ];
    }

    public function map($SuratTugas): array
    {
        return [
            $SuratTugas->nmr_srt_tgs,
            $SuratTugas->tgl_srt_tgs,
            $SuratTugas->pegawai->nama,
            $SuratTugas->unit,
            $SuratTugas->tgl_perjadin_mulai,
            $SuratTugas->tgl_perjadin_selesai,
            $SuratTugas->kota_asal,
            $SuratTugas->kota_tujuan,
            $SuratTugas->uraian_tugas,
            $SuratTugas->no_nodin,
            $SuratTugas->sppd->no_spm,
            $SuratTugas->sppd->no_sp2d,
            $SuratTugas->sppd->tgl_sp2d,
            $SuratTugas->sppd->tgl_pergi,
            $SuratTugas->sppd->maskapai_pergi,
            $SuratTugas->sppd->kode_booking_pergi,
            $SuratTugas->sppd->no_tiket_pergi,
            $SuratTugas->sppd->harga_pergi,
            $SuratTugas->sppd->tgl_pulang,
            $SuratTugas->sppd->maskapai_pulang,
            $SuratTugas->sppd->kode_booking_pulang,
            $SuratTugas->sppd->no_tiket_pulang,
            $SuratTugas->sppd->harga_pulang,
            $SuratTugas->sppd->tgl_masuk_hotel,
            $SuratTugas->sppd->tgl_keluar_hotel,
            $SuratTugas->sppd->jumlah_hari_hotel,
            $SuratTugas->sppd->nama_hotel,
            $SuratTugas->sppd->no_kamar,
            $SuratTugas->sppd->tarif

        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A2:AC2')->applyFromArray([
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

        $sheet->getStyle('A1:AC1')->applyFromArray([
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
        $sheet->getStyle('A3:AC3')->applyFromArray([
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

        $sheet->getStyle('A1:AC1')->getFont()->setName('Arial Nova')->setSize(25);

        $sheet->mergeCells('A1:AC1');
        $sheet->mergeCells('A2:B2');
        $sheet->mergeCells('C2:D2');
        $sheet->mergeCells('E2:F2');
        $sheet->mergeCells('G2:H2');
        $sheet->mergeCells('I2:J2');
        $sheet->mergeCells('K2:M2');
        $sheet->mergeCells('N2:W2');
        $sheet->mergeCells('X2:AD2');
        
    }
    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet   $event) {
                $sheet = $event->sheet;

                // Melakukan merge cell pada baris 1 dan kolom A sampai C
                $sheet->mergeCells('A1:AC1');

                // Mengatur alignment teks ke tengah
                $sheet->getStyle('A1:AC1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
            },
        ];
    }
}


