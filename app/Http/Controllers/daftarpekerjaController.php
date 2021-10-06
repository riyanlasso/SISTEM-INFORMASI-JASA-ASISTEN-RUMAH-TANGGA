<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class daftarpekerjaController extends Controller
{
    public function index()
    {
        return view('daftar_pekerja');
    }
}
