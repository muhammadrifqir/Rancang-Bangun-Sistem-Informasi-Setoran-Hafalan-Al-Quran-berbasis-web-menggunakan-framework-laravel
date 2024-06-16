<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hafalan extends Model
{
    use HasFactory;

    protected $table = 'hafalan';

    protected $fillable = [
        'tgl', 'waktu', 'ayat_dari', 'ayat_ke', 'jml_juz', 'hal_dari', 'hal_ke', 'keterangan', 'kategori_id', 'surat_id', 'santri_id'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function surat()
    {
        return $this->belongsTo(Surat::class);
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
