<?php

use App\Http\Controllers\GalleryImageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GalleryEventController;


Route::get('/',[AdminController::class,'login']);
Route::post('loginCheck',[AdminController::class,'loginCheck']);


Route::prefix('admin')->middleware('AdminLogin')->group(function(){
    Route::get('admin_index', function () {
        return view('admin.index');
    });
    Route::get('logout',[AdminController::class,'logout']);
    Route::resource('events', GalleryEventController::class);
    Route::get('showForm',[GalleryImageController::class,'showForm']);
    Route::post('store',[GalleryImageController::class,'store']);
    Route::get('showevents',[GalleryEventController::class,'showevents']);
});
