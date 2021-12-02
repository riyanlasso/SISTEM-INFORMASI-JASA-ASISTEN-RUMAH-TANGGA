<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('jenis_kelamin');
            $table->string('umur');
            $table->string('agama');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('gaji_minimum');
            $table->string('gaji_harapan');
            $table->string('pengalaman_kerja');
            $table->string('upload');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->dropColumn('jenis_kelamin');
            $table->dropColumn('umur');
            $table->dropColumn('agama');
            $table->dropColumn('kota');
            $table->dropColumn('provinsi');
            $table->dropColumn('gaji_minimum');
            $table->dropColumn('gaji_harapan');
            $table->dropColumn('pengalaman_kerja');
            $table->dropColumn('upload');
        });
    }
}
