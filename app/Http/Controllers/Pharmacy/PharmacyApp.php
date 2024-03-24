<?php

namespace App\Http\Controllers\Pharmacy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PharmacyApp extends Controller
{
    public function login(){
        return view('PharmacyScreens/login');
    }

    public function register(){
        return view('PharmacyScreens/Register');
    }
    public function home(){
        return view('PharmacyScreens/home');
    }
}
