<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/admin/dashboard', function () {
    return view('admin.index');
});
Route::get('/admin/login',[AdminController::class,'login']);
Route::post('loginCheck',[AdminController::class,'loginCheck']);
