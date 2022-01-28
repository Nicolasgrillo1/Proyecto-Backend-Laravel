<?php

use Illuminate\Support\Facades\Route;



Route::get('/home', function () {
    return view('25watts');
});

// Route::post('/saveUsers',"App\Http\Controllers\userController@saveUser")->name("saveUsers");