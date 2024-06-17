<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

//------- Making passed argument optional and conditional too for only alphanumeric arguments -------------------

Route::get('/home/{args?}', function($args = null) {
    if($args && !preg_match('/^[a-zA-Z0-9]+$/', $args)){
        return redirect('/error')->withErrors(['name' => 'The argument must contain only alphanumeric characters without space.']);
    }
    return view('home', ["naam" => $args]);
});

Route::view('/error', 'error');

//--------------------------------------------------------
