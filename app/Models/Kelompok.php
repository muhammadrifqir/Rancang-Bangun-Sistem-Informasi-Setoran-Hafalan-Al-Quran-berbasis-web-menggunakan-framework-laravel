<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelompok extends Model
{
    use HasFactory;

    protected $table = 'kelompok';

    protected $fillable = [
        'asrama', 'guru_id'
    ];

    public function santri()
    {
        return $this->hasMany(Santri::class);
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}
