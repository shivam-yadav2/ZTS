<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.index');
});

//Frontend Pages Routes
Route::view('/','frontend.index');