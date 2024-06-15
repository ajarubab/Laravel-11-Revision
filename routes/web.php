<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

//---------------------- Route to send a data to a specific ulr to a view page ----------------------------------

Route::get('/home/{naam}', function() {
    return view('home', ["naam" => "Raja"]);
});

//------------------------------------------------------------------------------------------