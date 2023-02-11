<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_karyawan extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nama_Karyawan',
        'Nik',
        'No_Telepon',
        'Alamat'
    ];

    protected $table = 'data_karyawan';
}
