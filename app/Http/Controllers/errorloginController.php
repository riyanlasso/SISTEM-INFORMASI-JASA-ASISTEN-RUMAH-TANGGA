<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class errorloginController extends Controller
{
    public function index()
    {
        return view('error_login');
    }
}
