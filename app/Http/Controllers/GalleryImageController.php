<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\GalleryEvent;
use Illuminate\Http\Request;
use App\Models\GalleryImage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class GalleryImageController extends Controller
{
      public function showForm(){
        $events=GalleryEvent::all();
        return view('admin.GalleryImg.GalleryImgForm',compact('events'));
      }
      public function store(Request $request){
                // Validate input
        $request->validate([
            'img' => 'required|image|mimes:jpeg,jpg,png,webp', // 2MB max
        ]);

        $imageName = null;

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '.webp'; // unique name
            $destinationPath = public_path('assets/uploads/galleryimg');

            // Intervention Image
            $manager = new ImageManager(new Driver());

            // Resize + save in .webp format
            $manager->read($image)
                ->scale(width: 800) // auto maintain aspect ratio
                ->toWebp(90)
                ->save($destinationPath . $imageName);
        }

        // Save image record into DB
        GalleryImage::create([
            'event_id' => $request->event_id,
            'img' => $imageName,
        ]);

        return redirect()->back()->with('success', 'Image uploaded successfully!');
    }

    
   
      
}
