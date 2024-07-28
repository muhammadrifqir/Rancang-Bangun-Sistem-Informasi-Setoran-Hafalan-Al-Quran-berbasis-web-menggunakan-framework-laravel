<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Santri extends Model
{
    use HasFactory;

    protected $table = 'santri';

    protected $fillable = [
        'nis', 'nama', 'tmp_lahir', 'tgl_lahir', 'jk', 'email', 'status_aktif', 'image', 'kelompok_id', 'kelas_id'
    ];

    public function kelompok()
    {
        return $this->belongsTo(Kelompok::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    // public function kehadiran()
    // {
    //     return $this->hasMany(Kehadiran::class);
    // }

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }

    public function hafalan()
    {
        return $this->hasMany(Hafalan::class);
    }

    public function jadwal()
    {
        return $this->hasMany(JadwalUjian::class);
    }
}
