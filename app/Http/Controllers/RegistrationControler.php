<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationControler extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function register(Request $request)
    {
        $request->validate([
            'user_name' => 'required',
            'user_email' => 'required|email',
            'user_password' => 'required',
            'password_confirmation' => 'required'
        ]);

        echo "<pre>";
        print_r($request->all());
    }
}
