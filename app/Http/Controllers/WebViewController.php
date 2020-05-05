<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebViewController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }

    public function client_login()
    {
        return view('client_login');
    }

    public function pharmacist_registration()
    {
        return view('pharmacist_registration');
    }

    public function doctor_registration()
    {
        return view('doctor_registration');
    }

    public function client_registration()
    {
        return view('client_registration');
    }
}
