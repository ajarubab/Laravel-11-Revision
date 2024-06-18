<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/wc/{name?}', function ($name = null) {
    return view('welcome', ['naam' => $name]);
});


//-------------------- Redirection (Try any one at a time) ------------------------------------

// Route::redirect('/home','/wc');

// Route::get('/home', function() {
//     return redirect('/wc');
// });

Route::get('/home', [HomeController::class,'toWelcomePage']);


//--------------------------------------------------------
