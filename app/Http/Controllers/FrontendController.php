<?php

namespace App\Http\Controllers;

use App\Models\CoreMember;
use App\Models\GalleryEvent;
use App\Models\HomeSlider;
use App\Models\TeamCard;
use App\Models\GalleryImage;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function GetHomeSlider(){
        $data=HomeSlider::where('is_active',1)->get();
        return view('frontend.pages.index2',compact('data'));
    }

    public function GetGalleryData(){
        $data =GalleryEvent::select('event_name','event_img')->get();
        return view('frontend.pages.gallery',compact('data'));
    }

    public function GetCoreMember(){
        $info=TeamCard::where('type','coremember')->get();
        return view('frontend.team.core_member',compact('info'));
    }

    public function GetAdvisoryData(){
        $info=TeamCard::where('type','advisory')->get(); 
        return view('frontend.team.board',compact('info'));
    }

    public function GetMemberData(){
        $info=TeamCard::where('type','coremember')->get(); 
        return view('frontend.team.member',compact('info'));
    }

    public function GetGalleryDetail($eventId)
    {
        $images = GalleryImage::where('event_id', $eventId)->get();
        return view('frontend.pages.gallery_detail', compact('images'));
    }

}
