<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratTugas extends Model
{
    use HasFactory;

    protected $table = 'surat_tugas';

    protected $fillable = [
        'nmr_srt_tgs',
        'tgl_srt_tgs',
        'pegawai_id',
        'unit',
        'tgl_perjadi_mulai',
        'tgl_perjadi_selesai',
        'kota_asal',
        'kota_tujuan',
        'uraian_tugas',
        'no_nodin',
        'no_sppd'
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'pegawai_id');
    }

    public function sppd()
    {
        return $this->belongsTo(Sppd::class, 'no_sppd');
    }

    public function laporan()
    {
        return $this->hasMany(LaporanSppd::class);
    }

    public function spm()
    {
        return $this->belongsTo(Spm::class, 'spm_id');
    }

    public function getNo_sp2dSppdAttribute()
    {
        return $this->sppd ? $this->sppd->no_spm : 'Belum di isi';
    }

    // public function sppdTgl()
    // {
    //     return $this->sppd ? $this->sppd->tgl_sp2d : 'Belum di isi';
    // }

    // public function sppdNo()
    // {
    //     return $this->sppd ? $this->sppd->no_sp2d : 'Belum di isi';
    // }

    // public function sppdSpm()
    // {
    //     return $this->sppd ? $this->sppd->tgl_pergi : 'Belum di isi';
    // }

    // public function sppdSpm()
    // {
    //     return $this->sppd ? $this->sppd->no_spm : 'Belum di isi';
    // }

    // public function sppdSpm()
    // {
    //     return $this->sppd ? $this->sppd->no_spm : 'Belum di isi';
    // }

    // public function sppdSpm()
    // {
    //     return $this->sppd ? $this->sppd->no_spm : 'Belum di isi';
    // }

    // public function sppdSpm()
    // {
    //     return $this->sppd ? $this->sppd->no_spm : 'Belum di isi';
    // }

    // public function sppdSpm()
    // {
    //     return $this->sppd ? $this->sppd->no_spm : 'Belum di isi';
    // }

    // public function sppdSpm()
    // {
    //     return $this->sppd ? $this->sppd->no_spm : 'Belum di isi';
    //}
}
