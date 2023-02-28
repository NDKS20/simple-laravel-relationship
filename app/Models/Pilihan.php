<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pilihan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_soal',
        'pilihan',
        'nama_pilihan',
    ];
}
