<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function show() {
        $name = ['Ram', 'Sita', 'Love', 'Kush', 'Shiv'];
        return view('home', ["names" => $name]);
    }
}
