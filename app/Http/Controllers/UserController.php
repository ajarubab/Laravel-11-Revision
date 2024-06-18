<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    function isPage() {
        if(View::exists('user1')) {
            return view('user');
        }
        return "No such View page Exists";
    }
}
