<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CoreMember;
use App\Models\GalleryEvent;
use App\Models\GuidingPrinciple;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class GuidingPrincipleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $info = GuidingPrinciple::all();
        // return view('admin.CoreMember.CoreMemberList',compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function GuidingprincipleForm()
    {
        // return view('admin.CoreMember.CoreMemberForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'icon' => 'required|image|mimes:jpeg,jpg,webp,png',
            'heading' => 'required|min:5|max:200',
            'description' => 'required|min:10|max:500',
        ]);

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }


        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        
        $imageName = null;

        if ($request->hasFile('icon')) {
            $image = $request->file('icon');
            $imageName = time() . '.webp';
            $destinationPath = public_path('assets/uploads/GuidingPrinciple');

            // Create ImageManager with GD driver
            $manager = new ImageManager(new Driver());

            // Read, resize, encode, and save as WebP
            $manager->read($image)
                ->scale(width: 800) // maintain aspect ratio
                ->toWebp(90)
                ->save($destinationPath . '/' . $imageName);
        }

        // Save records in DATABASE
        $data = GuidingPrinciple::create([
            'icon' => $imageName,
            'heading' => $request->heading,
            'description' => $request->description,
        ]);

        return response()->json([
            'msg' => 'Data added successfully',
            'data' => $data,
        ]);
        //return "Data added successfully";
        //  return redirect(url('admin/coremember/index'))->with('success','Record added successfully');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = GuidingPrinciple::find($id);
        // return view('admin.CoreMember.CoreMemberUpdate',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = GuidingPrinciple::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'icon' => 'nullable|image|mimes:jpeg,jpg,webp,png',
            'heading' => 'required|min:3|max:200',
            'description' => 'required|min:10|max:500',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $imageName = $data->icon; // keep old image by default

        if ($request->hasFile('icon')) {
            $image = $request->file('icon');
            $imageName = time() . '.webp';
            $destinationPath = public_path('assets/uploads/GuidingPrinciple');

            // Create ImageManager with GD driver
            $manager = new ImageManager(new Driver());

            // Read, resize, encode, and save as WebP
            $manager->read($image)
                ->scale(width: 800) // maintain aspect ratio
                ->toWebp(90)
                ->save($destinationPath . '/' . $imageName);
        }

        // Save records in DATABASE

        $data = $data->update([
            'icon' => $imageName,
            'heading' => $request->heading,
            'description' => $request->description,

        ]);
        return response()->json([
            'msg' => 'Data updated successfully',
            'data' => $data,
        ]);

        //return "Data added successfully";
        //  return redirect(url('admin/coremember/index'))->with('success','Record Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $data = GuidingPrinciple::findOrFail($id);

        // Delete image file from folder (if exists)
        $imagePath = public_path('assets/uploads/GuidingPrinciple/' . $data->icon);
        if (file_exists($imagePath) && is_file($imagePath)) {
            unlink($imagePath);
        }

        // Delete record from DB
        $data->delete();
        return response()->json([
            'msg' => 'Data deleted successfully',

        ]);
        // return redirect(url('admin/coremember/index'))->with('success', 'Record deleted successfully');

    }



}
