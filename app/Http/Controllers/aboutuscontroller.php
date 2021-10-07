<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutuscontroller extends Controller
{
    public function index()
    {
        return view('about_us');
    }
}
