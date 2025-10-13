<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CoreMemberController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\GalleryImageController;
use App\Http\Controllers\GuidingPrincipleController;
use App\Http\Controllers\OurJourneyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GalleryEventController;


// Route::view('/','Admin.pages.index');
Route::view('GalleryEventForm','Admin.pages.GalleryEvent.GalleryEventForm');

Route::get('/admin/login', [AdminController::class, 'login']);
Route::post('loginCheck', [AdminController::class, 'loginCheck']);

Route::prefix('admin')->middleware('AdminLogin')->group(function () {
    Route::get('dashboard', function () {
        return view('admin.pages.index');
    });
    Route::get('logout', [AdminController::class, 'logout']);
    Route::resource('events', GalleryEventController::class);
    Route::get('showForm', [GalleryImageController::class, 'showForm']);
    Route::post('galleryimg/store', [GalleryImageController::class,'store']);
    Route::get('showevents', [GalleryEventController::class, 'showevents']);
    Route::get('showImg/{id}', [GalleryImageController::class, 'showImg']);
    Route::delete('delete/{id}',  [GalleryImageController::class, 'delete']);
    //  contact us routes
    Route::get('contact/showForm', [ContactUsController::class, 'showForm']);
    Route::get('index', [ContactUsController::class, 'index']);
    Route::post('store', [ContactUsController::class, 'store']);
    Route::get('show', [ContactUsController::class, 'show']);
    Route::get('edit/{id}', [ContactUsController::class, 'edit']);
    Route::put('update/{id}', [ContactUsController::class, 'update']);
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

    // GuidingPriciple routes
    Route::get('guidingprinciple/GuidingPrincipleForm', [GuidingPrincipleController::class, 'GuidingprincipleForm']);
    Route::get('guidingprinciple/index', [GuidingPrincipleController::class, 'index']);
    Route::post('guidingprinciple/store', [GuidingPrincipleController::class, 'store']);
    Route::get('guidingprinciple/edit/{id}', [GuidingPrincipleController::class, 'edit']);
    Route::put('guidingprinciple/update/{id}', [GuidingPrincipleController::class, 'update']);
    Route::get('guidingprinciple/destroy/{id}', [GuidingPrincipleController::class, 'destroy']);


    // Our Journey routes
    Route::get('ourjourney/OurJourneyForm', [OurJourneyController::class, 'OurJourneyForm']);
    Route::get('ourjourney/index', [OurJourneyController::class, 'index']);
    Route::post('ourjourney/store', [OurJourneyController::class, 'store']);
    Route::get('ourjourney/edit/{id}', [OurJourneyController::class, 'edit']);
    Route::put('ourjourney/update/{id}', [OurJourneyController::class, 'update']);
    Route::get('ourjourney/destroy/{id}', [OurJourneyController::class, 'destroy']);

});

//Frontend Pages Routes
Route::view('/', 'frontend.pages.index');
Route::view('index2', 'frontend.pages.index2');
Route::view('/contact', 'frontend.contact');

//About Us Page Routes
Route::view('/about/guiding_principle', 'frontend.guiding_principle');
Route::view('/about/team/core_member', 'frontend.team.core_member');
Route::view('/about/team/influencer', 'frontend.team.influencer');
Route::view('/about/team/board', 'frontend.team.board');
Route::view('/about/team/member', 'frontend.team.member');

Route::view('/about/journey/human_first','frontend.journey.human_first');
Route::view('/about/journey/muhim','frontend.journey.muhim');
Route::view('/about/journey/jagrati','frontend.journey.jagrati');
Route::view('/about/journey/sneh','frontend.journey.sneh');
Route::view('/about/journey/muskaan','frontend.journey.muskaan');