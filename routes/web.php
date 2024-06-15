<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

//---------------------- Methods to render a view page ----------------------------------

Route::view('/home','home');

Route::get('/home', function() {
    return view('home');
});

Route::get('/home',[HomeController::class,'show']);

//------------------------------------------------------------------------------------------