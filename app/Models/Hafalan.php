<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hafalan extends Model
{
    use HasFactory;

    protected $table = 'hafalan';

    protected $fillable = [
        'tgl', 'waktu', 'surat_dari', 'ayat_dari', 'hal_dari', 'surat_ke', 'ayat_ke', 'hal_ke', 'jumlah', 'akumulasi_keseluruhan', 'keterangan', 'santri_id'
    ];

    public function santri()
    {
        return $this->belongsTo(Santri::class);
    }
}
