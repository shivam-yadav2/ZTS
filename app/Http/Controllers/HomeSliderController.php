<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\HomeSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class HomeSliderController extends Controller
{
    public function showForm()
    {
        return view('admin.pages.HomeSlider.sliderForm');
    }

    public function sliderstore(Request $request)
    {
        

        $validator = Validator::make($request->all(), [
            'img' => 'required|min:5|max:200|image|mimes:jpeg,jpg,webp,png',
            'text' => 'required|min:10|max:500',
            'sub_text' => 'required|min:5',
            'btn_text' => 'required',
            'btn_url' => 'required',
            'm_img' => 'required|image|mimes:jpeg,jpg,webp,png'
        ]);

      
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $imageName = null;

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '.webp';
            $destinationPath = public_path('assets/uploads/homeslider');

            // Create ImageManager with GD driver
            $manager = new ImageManager(new Driver());

            // Read, resize, encode, and save as WebP
            $manager->read($image)
                ->scale(width: 800) // maintain aspect ratio
                ->toWebp(90)
                ->save($destinationPath . '/' . $imageName);
        }


        if ($request->hasFile('m_img')) {
            $image = $request->file('m_img');
            $imageName2 = time() . '.webp';
            $destinationPath = public_path('assets/uploads/homeslider');

            // Create ImageManager with GD driver
            $manager = new ImageManager(new Driver());

            // Read, resize, encode, and save as WebP
            $manager->read($image)
                ->scale(width: 800) // maintain aspect ratio
                ->toWebp(90)
                ->save($destinationPath . '/' . $imageName2);
        }
    
        // Save records in DATABASE
        HomeSlider::create([
            'img' => $imageName,
            'text' => $request->text,
            'sub_text' => $request->sub_text,
            'btn_text' => $request->btn_text,
            'btn_url' => $request->btn_url,
            'mobile_img' => $imageName2,
            
        ]);

        //return "Data added successfully";
        return redirect(url('admin/slider/index'))->with('success', 'Record added successfully');
    }
    public function sliderindex(){
        $data=HomeSlider::all();
        return view('admin.pages.HomeSlider.sliderindex',compact('data'));
    }

    public function toggleStatus($id)
    {
        $item = HomeSlider::findOrFail($id);
    
        // Toggle logic (if 1 → 0, if 0 → 1)
        $item->is_active = $item->is_active == 1 ? 0 : 1;
        $item->save();
    
        return response()->json(['success' => true, 'status' => $item->is_active]);
    }
    
    public function sliderdestroy($id)
{
    // Find the record
    $item = HomeSlider::findOrFail($id);

    // Delete the images from server if exist
    if ($item->img && file_exists(public_path('assets/uploads/homeslider/'.$item->img))) {
        unlink(public_path('assets/uploads/homeslider/'.$item->img));
    }

    if ($item->mobile_img && file_exists(public_path('assets/uploads/homeslider/'.$item->mobile_img))) {
        unlink(public_path('assets/uploads/homeslider/'.$item->mobile_img));
    }

    // Delete the record from database
    $item->delete();

    // Return response (redirect or JSON)
    return redirect()->back()->with('success', 'Record deleted successfully.');
}


public function slideredit($id){
    $info=HomeSlider::find($id);
    return view('admin.pages.HomeSlider.sliderUpdate',compact('info'));
}

   public function sliderupdate(Request $request,$id)
{
    $info=HomeSlider::find($id);

    $validator = Validator::make($request->all(), [
        'img' => 'nullable|min:5|max:200|image|mimes:jpeg,jpg,webp,png',
        'text' => 'required|min:10|max:500',
        'sub_text' => 'required|min:5',
        'btn_text' => 'required',
        'btn_url' => 'required',
        'm_img' => 'nullable|image|mimes:jpeg,jpg,webp,png'
    ]);

  
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $imageName = $info->img;          // default to existing image
$imageName2 = $info->mobile_img;  // default to existing mobile image

   

    if ($request->hasFile('img')) {
        $image = $request->file('img');
        $imageName = time() . '.webp';
        $destinationPath = public_path('assets/uploads/homeslider');

        // Create ImageManager with GD driver
        $manager = new ImageManager(new Driver());

        // Read, resize, encode, and save as WebP
        $manager->read($image)
            ->scale(width: 800) // maintain aspect ratio
            ->toWebp(90)
            ->save($destinationPath . '/' . $imageName);
    }


    if ($request->hasFile('m_img')) {
        $image = $request->file('m_img');
        $imageName2 = time() . '.webp';
        $destinationPath = public_path('assets/uploads/homeslider');

        // Create ImageManager with GD driver
        $manager = new ImageManager(new Driver());

        // Read, resize, encode, and save as WebP
        $manager->read($image)
            ->scale(width: 800) // maintain aspect ratio
            ->toWebp(90)
            ->save($destinationPath . '/' . $imageName2);
    }

    // Save records in DATABASE
    $info->update([
        'img' => $imageName,
        'text' => $request->text,
        'sub_text' => $request->sub_text,
        'btn_text' => $request->btn_text,
        'btn_url' => $request->btn_url,
        'mobile_img' => $imageName2,
    ]);

    //return "Data added successfully";
    return redirect(url('admin/slider/index'))->with('success', 'Record Updated successfully');
  }

}
