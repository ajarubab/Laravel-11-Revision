<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::view('/wc','welcome');
Route::view('/home','home');
Route::view('/user','user');
Route::view('/about','about');

