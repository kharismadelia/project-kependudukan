<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataKematianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kematian', function (Blueprint $table) {

            $table->increments('id_kematian');
            $table->unsignedInteger('id_penduduk');
            $table->string('tgl_meninggal');
            $table->string('tempat_meninggal');
            $table->string('keterangan');

            $table->foreign('id_penduduk')->references('id_penduduk')->on('data_penduduk')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_kematian');
    }
}
