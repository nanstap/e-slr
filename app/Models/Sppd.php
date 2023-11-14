<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sppd extends Model
{
    use HasFactory;
    protected $table = 'sppds';

    protected $guarded = [];

    public function suratTugas()
    {
        return $this->hasMany(SuratTugas::class);
    }

    // public function g

    // public function spm()
    // {
    //     return $this->belongsTo(Spm::class);
    // }
}
