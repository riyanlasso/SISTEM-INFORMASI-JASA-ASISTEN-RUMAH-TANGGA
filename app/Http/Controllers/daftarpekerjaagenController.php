<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class daftarpekerjaagenController extends Controller
{
    public function index()
    {
        return view('daftar_pekerjaagen');
    }
}
