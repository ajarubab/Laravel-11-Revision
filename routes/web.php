<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// applying a middleware group to a single routes

Route::prefix('student')->group(function(){
    Route::controller(HomeController::class)->group(function(){
        Route::get('about/{name}','about')->middleware('Consent');
    });
});

// applying a middleware group to several routes

Route::middleware('AgeCountryOnly')->group(function() {
    Route::prefix('student')->group(function(){
        Route::controller(HomeController::class)->group(function(){
            Route::get('show','show');
            Route::get('add','add');
            Route::get('delete','delete');
            Route::get('update','update');
        });
    });
});