<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CoreMember;
use App\Models\GalleryEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class CoreMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $info=CoreMember::all();
        return view('admin.CoreMember.CoreMemberList',compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function CoreMemberForm()
    {
        return view('admin.CoreMember.CoreMemberForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $validator = Validator::make($request->all(), [
            'img'         => 'required|image|mimes:jpeg,jpg,webp,png',
            'name'        => 'required|min:5|max:200',
            'description' => 'required|min:10|max:500',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
  
        $imageName = null;

        if ($request->hasFile('img')) {
            $image      = $request->file('img');
            $imageName  = time() . '.webp';
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
        CoreMember::create([
            'img'         => $imageName,
            'name'        => $request->name,
            'description' => $request->description,  
        ]);

        //return "Data added successfully";
         return redirect(url('admin/coremember/index'))->with('success','Record added successfully');
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=CoreMember::find($id);
        return view('admin.CoreMember.CoreMemberUpdate',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=CoreMember::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'img'   => 'nullable|image|mimes:jpeg,jpg,webp,png',
            'name'        => 'required|min:3|max:200',
            'description' => 'required|min:10|max:500',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $imageName = $data->img; // keep old image by default

        if ($request->hasFile('img')) {
            $image      = $request->file('img');
            $imageName  = time() . '.webp';
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

       $data->update([
            'name'        => $request->name,
            'description' => $request->description,
            'img'   => $imageName,
        ]);

        //return "Data added successfully";
         return redirect(url('admin/coremember/index'))->with('success','Record Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    $data = CoreMember::findOrFail($id);

    // Delete image file from folder (if exists)
    $imagePath = public_path('assets/uploads/CoreMember/' . $data->img);
    if (file_exists($imagePath) && is_file($imagePath)) {
        unlink($imagePath);
    }

    // Delete record from DB
    $data->delete();

    return redirect(url('admin/coremember/index'))->with('success', 'Record deleted successfully');

    }


   
}
