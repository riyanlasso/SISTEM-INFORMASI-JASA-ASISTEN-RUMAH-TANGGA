<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    protected $table = "formulirart"; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas
    public $timestamps = false;
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey

    protected $fillable = [

        'nama',
        'alamat',
        'telepon',
        'jenis_kelamin',
        'umur',
        'agama',
        'kota',
        'provinsi',
        'gaji_minimum',
        'gaji_harapan',
        'pengalaman_kerja',
        'upload',

    ];
}
