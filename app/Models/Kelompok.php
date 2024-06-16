<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelompok extends Model
{
    use HasFactory;

    protected $table = 'kelompok';

    protected $fillable = [
        'kategori_santri', 'kelas', 'guru_id', 'kategori_id'
    ];

    public function santri()
    {
        return $this->hasMany(Santri::class);
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
