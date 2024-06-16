<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru';

    protected $fillable = [
        'nip', 'nama', 'tmp_lahir', 'tgl_lahir', 'jk', 'no_telp', 'email', 'alamat', 'image'
    ];

    public function kelompok()
    {
        return $this->hasMany(Kelompok::class);
    }
}
