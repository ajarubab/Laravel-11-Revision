<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    function showUser() {
        if(View::exists('user')) {
            $name = "Rajat";
            $people = ['ramu', 'ramesh', 'rakesh', 'roxy'];
            return view('user',['name'=>$name], ['users' => $people]);
        }
        return "No such View page Exists";
    }
}
