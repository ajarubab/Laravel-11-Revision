<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function toWelcomePage() {
        return redirect('/wc/Rakesh');
    }
}
