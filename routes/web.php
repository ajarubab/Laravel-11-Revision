<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('/user',[UserController::class,'showUser']); 
Route::view('/home','home'); 