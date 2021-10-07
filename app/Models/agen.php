<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;



class agen extends Model
{
    protected $table = "agen_penyalur";
    public $timestamps = false;
    protected $primaryKey = 'nama';

    protected $fillable = [
        'nama',
        'alamat',
        'email',
        'telepon',
        'dokumen_SIUP',
        'penanggung_jawab',

    ];
}
