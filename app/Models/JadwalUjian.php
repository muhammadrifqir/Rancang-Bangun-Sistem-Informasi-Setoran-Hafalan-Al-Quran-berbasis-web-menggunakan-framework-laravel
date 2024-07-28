<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalUjian extends Model
{
    use HasFactory;

    protected $table = 'jadwal_ujians';

    protected $fillable = [
        'tahun_akademik', 'tanggal', 'waktu_mulai', 'waktu_selesai', 'keterangan', 'mustami\'_1', 'mustami\'_2', 'kategori_id', 'santri_id'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function santri()
    {
        return $this->belongsTo(Santri::class);
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }
}
