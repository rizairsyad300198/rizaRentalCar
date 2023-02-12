<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataMobilsTable extends Migration
{
    /**
     *
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_mobils', function (Blueprint $table) {
            $table->id();
            $table->string('merk');
            $table->string('no_registrasi');
            $table->string('warna_mobil');
            $table->string('tahun');
            $table->integer('harga_sewa');
            $table->integer('stock');
            $table->string('gambar');
            $table->string('deskripsi');
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
        Schema::dropIfExists('data_mobils');
    }
}
