<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;

    protected $table = 'surat';

    protected $fillable = [
        'no_surat', 'nama_surat'
    ];

    public function hafalan()
    {
        return $this->hasMany(Hafalan::class);
    }
}
