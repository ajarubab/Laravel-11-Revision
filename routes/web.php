<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::prefix('student')->group(function(){
    Route::controller(HomeController::class)->group(function(){
        Route::get('show','show');
        Route::get('add','add');
        Route::get('delete','delete');
        Route::get('update','update');
        Route::get('about/{name}','about')->middleware('Concent');
    });
});