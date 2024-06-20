<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;

Route::view('/user-details-form','user-form'); 
Route::post('/add-user-details',[FormController::class,'getUserDetails']); 