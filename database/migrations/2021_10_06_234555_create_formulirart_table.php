<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulirartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulirart', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('alamat');
            $table->string('telepon');
            $table->string('jenis_kelamin');
            $table->string('umur');
            $table->string('agama');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('gaji_minimum');
            $table->string('gaji_harapan');
            $table->string('pengalaman_kerja');
            $table->string('upload');
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
        Schema::dropIfExists('formulirart');
    }
}
