<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CoreMember;
use App\Models\GalleryEvent;
use App\Models\OurJourney;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class OurJourneyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $info = OurJourney::all();
         return view('admin.pages.OurJourney.OurJourneyList',compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function OurJourneyForm()
    {
         return view('admin.pages.OurJourney.OurJourneyForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'img' => 'required|image|mimes:jpeg,jpg,webp,png',
            'description' => 'required|min:10|max:500',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $imageName = null;

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '.webp';
            $destinationPath = public_path('assets/uploads/OurJourney');

            // Create ImageManager with GD driver
            $manager = new ImageManager(new Driver());

            // Read, resize, encode, and save as WebP
            $manager->read($image)
                ->scale(width: 800) // maintain aspect ratio
                ->toWebp(90)
                ->save($destinationPath . '/' . $imageName);
        }

        // Save records in DATABASE
        $data = OurJourney::create([
            'img' => $imageName,
            'description' => $request->description,
        ]);

       
        //return "Data added successfully";
         return redirect(url('admin/ourjourney/index'))->with('success','Record added successfully');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = OurJourney::find($id);
        
         return view('admin.pages.OurJourney.OurJourneyUpdate',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = OurJourney::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'img' => 'nullable|image|mimes:jpeg,jpg,webp,png',
            'description' => 'required|min:10|max:500',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $imageName = $data->img; // keep old image by default

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '.webp';
            $destinationPath = public_path('assets/uploads/CoreMember');

            // Create ImageManager with GD driver
            $manager = new ImageManager(new Driver());

            // Read, resize, encode, and save as WebP
            $manager->read($image)
                ->scale(width: 800) // maintain aspect ratio
                ->toWebp(90)
                ->save($destinationPath . '/' . $imageName);
        }

        // Save records in DATABASE

        $record = $data->update([
            'img' => $imageName,
            'description' => $request->description,

        ]);

     
        //return "Data added successfully";
        return redirect(url('admin/ourjourney/index'))->with('success','Record Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $data = OurJourney::findOrFail($id);

        // Delete image file from folder (if exists)
        $imagePath = public_path('assets/uploads/CoreMember/' . $data->img);
        if (file_exists($imagePath) && is_file($imagePath)) {
            unlink($imagePath);
        }

        // Delete record from DB
        $data->delete();
     

          return redirect(url('admin/ourjourney/index'))->with('success', 'Record deleted successfully');

    }



}
