<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('admin.index');
});
Route::get('login',[AdminController::class,'login']);
Route::post('loginCheck',[AdminController::class,'loginCheck']);

//Frontend Pages Routes
Route::view('/','frontend.index');