<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function show() {
        $name = "Ram";
        return view('home', ["name" => $name]);
    }
}
