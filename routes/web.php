<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\IsEmployee;
use App\Http\Middleware\CountryCheck;

// applying a middleware group to a single routes

Route::prefix('student')->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('about/{name}', 'about')->middleware('Consent');
    });
});

// applying a middleware group to several routes

Route::middleware('AgeCountryOnly')->group(function () {
    Route::prefix('student')->group(function () {
        Route::controller(HomeController::class)->group(function () {
            Route::get('show', 'show');
            Route::get('add', 'add');
            Route::get('delete', 'delete');
            Route::get('update', 'update');
        });
    });
});

// applying more than one middleware validations directly on a single route
// Try with route "/employee?country=india&isemp=true" by changing values of country and/or isemp
Route::view('employee', 'employee')->middleware(
    [
        CountryCheck::class,
        IsEmployee::class
    ]
);
