<?php

use Illuminate\Support\Facades\Route;

Route::view('/user','user');
Route::view('/home','home');
Route::view('/home/{nm}','home');
Route::view('/about','about');
Route::view('/about/{name}','about');
