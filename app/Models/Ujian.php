<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    use HasFactory;

    protected $table = 'ujian';

    protected $fillable = [
        'tahun', 'periode', 'waktu_mulai', 'waktu_selesai', 'keterangan'
    ];

    public function formNilai()
    {
        return $this->hasMany(FormNilai::class);
    }
}
