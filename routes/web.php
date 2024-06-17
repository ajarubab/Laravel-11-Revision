<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

//--------------------------------------------------------

Route::get('/home/{args}', function($args) {
    return view('home', ["naam" => $args]);
})->where('args', '[a-zA-Z0-9]+');

//--------------------------------------------------------
