<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('id_mobil');
            $table->integer('id_penyewa');
            $table->string('tanggal_mulai');
            $table->string('tanggal_berakhir');
            $table->enum('status',['booked', 'on progress']);
            $table->string('bukti_bayar');
            $table->integer('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_bookings');
    }
}
