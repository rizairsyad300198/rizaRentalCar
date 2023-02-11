<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'nohp',
        'nik',
        'tanggal_mulai',
        'tanggal_berakhir',
        'status',
        'bukti_bayar'
    ];


    protected $table = 'data_bookings';
}
