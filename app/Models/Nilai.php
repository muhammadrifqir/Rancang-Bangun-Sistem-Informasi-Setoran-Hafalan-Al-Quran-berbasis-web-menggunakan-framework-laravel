<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $table = 'nilai';

    protected $fillable = [
        'score', 'santri_id', 'hafalan_id', 'form_nilai_id'
    ];

    public function santri()
    {
        return $this->belongsTo(Santri::class);
    }

    public function hafalan()
    {
        return $this->belongsTo(Hafalan::class);
    }

    public function formNilai()
    {
        return $this->belongsTo(FormNilai::class);
    }
}