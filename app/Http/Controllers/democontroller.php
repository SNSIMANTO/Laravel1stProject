<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class democontroller extends Controller
{
    public function index()
    {
       // return view('home'); while using layouts(home.blade.php)
        return view('index');
    }
    public function some()
    {
        return view('about');
    }
}
