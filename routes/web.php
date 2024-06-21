<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::view('/home','home');
Route::view('/about','about');

// named route for homepage
Route::get('show',[HomeController::class,'toFufaHome']);
Route::view('/home/father/sister/husband','home')->name('fufaHome');


Route::get('see',[HomeController::class,'toMosaHome']);
Route::view('/home/mother/sister/husband/{name}','home')->name('mosaHome');
