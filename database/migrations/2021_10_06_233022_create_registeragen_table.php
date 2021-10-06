<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisteragenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registeragen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_agen');
            $table->string('alamat');
            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->string('telepon');
            $table->string('dokumen');
            $table->string('penanggung_jawab');
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
        Schema::dropIfExists('registeragen');
    }
}
