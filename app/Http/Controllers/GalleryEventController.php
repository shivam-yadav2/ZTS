<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\GalleryEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class GalleryEventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $info=GalleryEvent::all();
        return view('admin.GalleryEvent.GalleryList',compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.GalleryEvent.GalleryEventForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'event_name'        => 'required|min:5|max:200',
            'event_description' => 'required|min:10|max:500',
            'event_date'        => 'required|date',
            'event_img'         => 'required|image|mimes:jpeg,jpg,webp,png',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $imageName = null;

        if ($request->hasFile('event_img')) {
            $image      = $request->file('event_img');
            $imageName  = time() . '.webp';
            $destinationPath = public_path('assets/uploads/events');

            // Create ImageManager with GD driver
            $manager = new ImageManager(new Driver());

            // Read, resize, encode, and save as WebP
            $manager->read($image)
                ->scale(width: 800) // maintain aspect ratio
                ->toWebp(90)
                ->save($destinationPath . '/' . $imageName);
        }

        // Save records in DATABASE
        GalleryEvent::create([
            'event_name'        => $request->event_name,
            'event_description' => $request->event_description,
            'event_date'        => $request->event_date,
            'event_img'         => $imageName,
        ]);

        //return "Data added successfully";
         return redirect(url('events'))->with('success','Record added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=GalleryEvent::find($id);
        return view('admin.GalleryEvent.GalleryEventUpdate',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=GalleryEvent::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'event_name'        => 'required|min:5|max:200',
            'event_description' => 'required|min:10|max:500',
            'event_date'        => 'required|date',
            'event_img'         => 'nullable|image|mimes:jpeg,jpg,webp,png',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $imageName = $data->event_img; // keep old image by default

        if ($request->hasFile('event_img')) {
            $image      = $request->file('event_img');
            $imageName  = time() . '.webp';
            $destinationPath = public_path('assets/uploads/events');

            // Create ImageManager with GD driver
            $manager = new ImageManager(new Driver());

            // Read, resize, encode, and save as WebP
            $manager->read($image)
                ->scale(width: 800) // maintain aspect ratio
                ->toWebp(90)
                ->save($destinationPath . '/' . $imageName);
        }

        // Save records in DATABASE

       $data->update([
            'event_name'        => $request->event_name,
            'event_description' => $request->event_description,
            'event_date'        => $request->event_date,
            'event_img'         => $imageName,
        ]);

        //return "Data added successfully";
         return redirect(url('events'))->with('success','Record Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    $data = GalleryEvent::findOrFail($id);

    // Delete image file from folder (if exists)
    $imagePath = public_path('assets/uploads/events/' . $data->event_img);
    if (file_exists($imagePath) && is_file($imagePath)) {
        unlink($imagePath);
    }

    // Delete record from DB
    $data->delete();

    return redirect(url('events'))->with('success', 'Record deleted successfully');

    }


   
}
