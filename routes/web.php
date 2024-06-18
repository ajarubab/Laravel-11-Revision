<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});


//-------------------- Redirection (Try any one at a time) ------------------------------------

Route::get('/home', function() {
    return redirect('/');
});

Route::get('/home', [HomeController::class,'toWelcomePage']);

Route::redirect('/home','/');

//--------------------------------------------------------
