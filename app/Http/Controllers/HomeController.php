<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function toFufaHome() {
        // return redirect()->to('/home/father/sister/husband');        // traditionalway of redirecting
        return to_route('fufaHome');    // using named route taking function to_route to execute any url
    }
}
