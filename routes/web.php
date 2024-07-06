<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('form','form');
Route::get('/get-form',[FormController::class,'getRoute']);
Route::post('/post-form',[FormController::class,'postRoute']);
Route::put('/put-form',[FormController::class,'putRoute']);
Route::patch('/patch-form',[FormController::class,'patchRoute']);
Route::delete('/delete-form',[FormController::class,'deleteRoute']);