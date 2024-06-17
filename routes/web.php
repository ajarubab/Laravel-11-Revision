<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

//--------------------------------------------------------

Route::get('/home/{name}', function($name){
    return view('home',["naam" => $name]);
});

//--------------------------------------------------------
