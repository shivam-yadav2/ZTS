<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\GalleryImageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GalleryEventController;



Route::get('/admin/login', [AdminController::class, 'login']);
Route::post('loginCheck', [AdminController::class, 'loginCheck']);


Route::prefix('admin')->middleware('AdminLogin')->group(function () {
    Route::get('dashboard', function () {
        return view('admin.index');
    });
    Route::get('logout', [AdminController::class, 'logout']);
    Route::resource('events', GalleryEventController::class);
    Route::get('showForm', [GalleryImageController::class, 'showForm']);
    Route::post('store', [GalleryImageController::class, 'store']);
    Route::get('showevents', [GalleryEventController::class, 'showevents']);
    Route::get('showImg/{id}', [GalleryImageController::class, 'showImg']);
    Route::delete('delete/{id}', action: [GalleryImageController::class, 'delete']);
    //  contact us routes
    Route::get('contact/showForm', [ContactUsController::class, 'showForm']);
    Route::get('index', [ContactUsController::class, 'index']);
    Route::post('store', [ContactUsController::class, 'store']);
    Route::get('show', [ContactUsController::class, 'show']);
    Route::get('edit/{id}', [ContactUsController::class, 'edit']);
    Route::post('update/{id}', [ContactUsController::class, 'update']);
    Route::get('destroy/{id}', [ContactUsController::class, 'destroy']);
});

//Frontend Pages Routes
Route::view('/', 'frontend.index');
Route::view('/contact', 'frontend.contact');