<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPendudukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_penduduk', function (Blueprint $table) {
            $table->increments('id_penduduk');
            $table->unsignedInteger('id_kelahiran');
            $table->string('nik')->unique();
            $table->string('agama');
            $table->string('kabupaten_kota');
            $table->string('kecamatan');
            $table->string('alamat');
            $table->string('pendidikan_terakhir');
            $table->string('status');
            $table->string('pekerjaan');

            $table->foreign('id_kelahiran')->references('id_kelahiran')->on('data_kelahiran')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_penduduk');
    }
}
