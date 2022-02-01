<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


// Route::post('/saveUsers',"App\Http\Controllers\userController@saveUser")->name("saveUsers");