<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::view('/home','home');
Route::view('/about','about');


// Route::view('/naam', 'user', ["name" => "ramesh"]);
// Route::view('student/home', 'home');
// Route::get('student/show',[HomeController::class,'show']);
// Route::get('student/add',[HomeController::class,'add']);
// Route::get('/home/{name?}', function($name = null) {
//     return view('user',['name' => $name]);
// });

    
Route::prefix('student')->group(function(){
    Route::view('/naam', 'user', ["name" => "ramesh"]);
    Route::view('/home', 'home');
    Route::get('/show',[HomeController::class,'show']);
    Route::get('/add',[HomeController::class,'add']);
    Route::get('/home/{name?}', function($name = null) {
        return view('user',['name' => $name]);
    });
});