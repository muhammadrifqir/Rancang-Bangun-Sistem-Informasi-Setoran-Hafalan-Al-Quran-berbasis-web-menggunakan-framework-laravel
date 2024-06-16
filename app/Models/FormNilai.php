<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormNilai extends Model
{
    use HasFactory;

    protected $table = 'form_nilai';

    protected $fillable = [
        'kategori_id', 'ujian_id', 'santri_id'
    ];

    public function ujian()
    {
        return $this->belongsTo(Ujian::class);
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
