<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// route to the controller
Route::get('users', [UserController::class, 'showUserData']);