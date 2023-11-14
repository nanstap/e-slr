<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanSppd extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function suratTugas()
    {
        return $this->belongsTo(SuratTugas::class, 'st_id');
    }
}
