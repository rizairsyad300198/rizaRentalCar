<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMobil extends Model
{
    use HasFactory;

    protected $fillable = [
        'merk',
        'no_registrasi',
        'warna_mobil',
        'jenis_mobil',
        'stock'
    ];
    protected $table = 'data_mobils';
}
