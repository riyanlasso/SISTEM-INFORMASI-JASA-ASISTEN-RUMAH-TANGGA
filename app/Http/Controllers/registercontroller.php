<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registercontroller extends Controller
{
    public function agen()
    {
        return view("LOGIN.register_agen");
    }
    public function customer()
    {
        return view("LOGIN.register_customer");
    }
}
