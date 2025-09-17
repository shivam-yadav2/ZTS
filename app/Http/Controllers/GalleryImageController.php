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
    public function showForm()
    {
        $events = GalleryEvent::all();
        return view('admin.GalleryImg.GalleryImgForm', compact('events'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'img' => 'required',
            'img.*' => 'image|mimes:jpeg,jpg,png,webp|max:2048',
        ], [
            'img.required' => 'Please select at least one image.',
            'img.*.image' => 'All uploaded files must be images.',
            'img.*.mimes' => 'Images must be jpeg, jpg, png, or webp format.',
            'img.*.max' => 'Each image must not be larger than 2MB.',
        ]);


        if ($request->hasFile('img')) {
            foreach ($request->file('img') as $image) {
                $imageName = time() . '_' . uniqid() . '.webp';
                $destinationPath = public_path('assets/uploads/galleryimg');

                // Intervention Image
                $manager = new ImageManager(new Driver());
                $manager->read($image)
                    ->scale(width: 800) // maintain aspect ratio
                    ->toWebp(90)
                    ->save($destinationPath . '/' . $imageName);

                // Save into DB
                GalleryImage::create([
                    'event_id' => $request->event_id,
                    'img' => $imageName,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Images uploaded successfully!');
    }

    public function showImg($eventId)
    {
        $images = GalleryImage::where('event_id', $eventId)->get();
        return view('admin.GalleryImg.GalleryImgList', compact('images'));
    }
    public function delete($id) 
    {
        $image = GalleryImage::find($id);
    
        if ($image) {
            // delete file from public folder
            $filePath = public_path('assets/uploads/galleryimg/' . $image->img);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
    
            $eventId = $image->event_id; // save the event id before deleting
            $image->delete();
    
            // get remaining images for this event
            $images = GalleryImage::where('event_id', $eventId)->get();
            // reuse showImg to get remaining images and return view
            
            return $this->showImg($eventId)->with('success', 'Image deleted successfully!');
            // return view('admin.GalleryImg.GalleryImgList', compact('images'))
            //        ->with('success', 'Image deleted successfully!');
        }
    
        return redirect()->back()->with('error', 'Image not found!');
    }
    








}
