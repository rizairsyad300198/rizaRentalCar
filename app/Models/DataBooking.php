<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_mobil',
        'id_penyewa',
        'tanggal_mulai',
        'tanggal_berakhir',
        'status',
        'bukti_bayar',
        'total',
    ];


    protected $table = 'data_bookings';
}
