<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;

    protected $fillable = [
        'soal',
    ];

    public function pilihans()
    {
        return $this->hasMany(Pilihan::class, 'id_soal', 'id');
    }

    public function jawabans()
    {
        return $this->hasOne(Jawaban::class, 'id_soal', 'id');
    }

    public function jawabansPilihans()
    {
        return $this->hasOne(Jawaban::class, 'id_soal', 'id')->with('pilihan');
    }
}
