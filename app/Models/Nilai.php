<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $table = 'nilai';

    protected $fillable = [
        'tahun_akademik', 'jumlah_hafalan', 'hafalan_dibaca', 'nilai_hafalan', 'adab', 'tajwid', 'kelancaran', 'fashohah', 'santri_id', 'jadwal_ujian_id'
    ];

    public function santri()
    {
        return $this->belongsTo(Santri::class);
    }

    public function jadwal()
    {
        return $this->belongsTo(JadwalUjian::class, 'jadwal_ujian_id');
    }
}