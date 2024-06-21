<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::view('/home','home');
Route::view('/about','about');

// named route for homepage
Route::view('/home/father/sister/husband','home')->name('fufaHome');


Route::get('show',[HomeController::class,'toFufaHome']);
