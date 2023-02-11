<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_mobils', function (Blueprint $table) {
            $table->id();
            $table->integer('id_karyawan');
            $table->string('merk');
            $table->char('no_registrasi');
            $table->string('warna_mobil');
            $table->string('jenis_mobil');
            $table->string('harga_sewa');
            $table->integer('stock');
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
