<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spm extends Model
{
    use HasFactory;
    protected $table = 'spms';

    public function sppd()
    {
        return $this->hasMany(Sppd::class);
    }
}
