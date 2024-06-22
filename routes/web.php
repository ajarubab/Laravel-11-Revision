<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('student/show',[HomeController::class,'show']);
// Route::get('student/add',[HomeController::class,'add']);
// Route::get('student/delete',[HomeController::class,'delete']);
// Route::get('student/update',[HomeController::class,'update']);
// Route::get('about/{name}',[HomeController::class,'about']);

Route::controller(HomeController::class)->group(function(){
    Route::get('show','show');
    Route::get('add','add');
    Route::get('delete','delete');
    Route::get('update','update');
    Route::get('about/{name}','about');
});