<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

//------- Route weightage : " match >>> any >>> view,get,post,put,patch,delete " -------------

// Route::match(['get','post'],'user',[FormController::class,'getPostRoute']);
// Route::match(['put','patch'],'user',[FormController::class,'putPatchRoute']);

// Route::any('/user',[FormController::class,'anyRoute']);

Route::view('form','form');
Route::get('/user',[FormController::class,'getRoute']);
Route::post('/user',[FormController::class,'postRoute']);
Route::put('/user',[FormController::class,'putRoute']);
Route::patch('/user',[FormController::class,'patchRoute']);
Route::delete('/user',[FormController::class,'deleteRoute']);



