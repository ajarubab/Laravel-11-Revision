<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function show() {
        return "Showing Student";
    }

    function add() {
        return view('about');
    }
}
