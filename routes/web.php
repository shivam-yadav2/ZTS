<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CoreMemberController;
use App\Http\Controllers\EnquiryController;
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

    // enquiry routes
    Route::get('enquiry/enquiryForm', [EnquiryController::class, 'enquiryForm']);
    Route::get('enquiry/index', [EnquiryController::class, 'index']);
    Route::post('enquiry/store', [EnquiryController::class, 'store']);
    Route::get('enquiry/edit/{id}', [EnquiryController::class, 'edit']);
    Route::post('enquiry/update/{id}', [EnquiryController::class, 'update']);
    Route::get('enquiry/destroy/{id}', [EnquiryController::class, 'destroy']);

    // CoreMember routes
    Route::get('coremember/CoreMemberForm', [CoreMemberController::class, 'CoreMemberForm']);
    Route::get('coremember/index', [CoreMemberController::class, 'index']);
    Route::post('coremember/store', [CoreMemberController::class, 'store']);
    Route::get('coremember/edit/{id}', [CoreMemberController::class, 'edit']);
    Route::put('coremember/update/{id}', [CoreMemberController::class, 'update']);
    Route::get('coremember/destroy/{id}', [CoreMemberController::class, 'destroy']);
});

//Frontend Pages Routes
Route::view('/', 'frontend.index');