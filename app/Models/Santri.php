<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;

    protected $table = 'santri';

    protected $fillable = [
        'nis', 'nama', 'tmp_lahir', 'tgl_lahir', 'jk', 'email', 'status_aktif', 'image', 'kelompok_id'
    ];

    public function kelompok()
    {
        return $this->belongsTo(Kelompok::class);
    }

    public function kehadiran()
    {
        return $this->hasMany(Kehadiran::class);
    }

    public function formNilai()
    {
        return $this->hasMany(FormNilai::class);
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }

    public function hafalan()
    {
        return $this->hasMany(Hafalan::class);
    }
}
