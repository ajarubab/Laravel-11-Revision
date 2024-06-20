<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    function getUserDetails(Request $req) {
        return $req->all();
    }
}
