<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
    use HasFactory;

    protected $table = 'kehadiran';

    protected $fillable = [
        'tgl', 'status', 'santri_id', 'kelompok_id'
    ];

    public function santri()
    {
        return $this->belongsTo(Santri::class);
    }

    public function kelompok()
    {
        return $this->belongsTo(Kelompok::class);
    }
}
