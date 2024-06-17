<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

//---------------------- Methods to render a view page ----------------------------------

Route::get('/home/{name}',[HomeController::class,'show']);

//------------------------------------------------------------------------------------------