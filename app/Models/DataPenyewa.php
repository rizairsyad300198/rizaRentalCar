<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPenyewa extends Model
{
    use HasFactory;
    protected $fillable  = [
        'nama',
        'nik',
        'no_telepon',
        'email',
        'alamat',
    ];
    protected $table = 'data_penyewa';
}
