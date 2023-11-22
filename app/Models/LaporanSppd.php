<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanSppd extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function st()
    {
        return $this->belongsTo(SuratTugas::class, 'st_id');
    }

    public function sppd()
    {
        return $this->belongsTo(Sppd::class, 'sppd_id');
    }
}
