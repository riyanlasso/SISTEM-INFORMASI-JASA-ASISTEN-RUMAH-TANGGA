<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('alamat');
            $table->bigInteger('telepon');
            $table->string('username');
            $table->string('keahlian');
            $table->string('pengalaman_kerja');
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
            $table->dropColumn('alamat');
            $table->dropColumn('telepon');
            $table->dropColumn('username');
            $table->dropColumn('keahlian');
            $table->dropColumn('pengalaman_kerja');
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
