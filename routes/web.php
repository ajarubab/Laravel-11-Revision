<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('form','form');
Route::post('/user',[FormController::class,'postRoute']);



