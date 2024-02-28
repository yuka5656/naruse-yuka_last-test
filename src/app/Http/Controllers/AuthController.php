<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function index()
    {
        return view('admin');
    }
    
    public function register()
    {
        return view('login');
    }

    // public function logout()
    // {
    //     Auth::logout();
    // }
}
