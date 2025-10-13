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
        $info = OurJourney::where('type','HumanFirst')->paginate('6');
         return view('admin.pages.OurJourney.HumanFirst.OurJourneyList',compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function OurJourneyForm()
    {
         return view('admin.pages.OurJourney.HumanFirst.OurJourneyForm');
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
             'type'=>$request->type,
         ]);
         // dd($request->all());
        
         //return "Data added successfully";
          return redirect()->back()->with('success','Record added successfully');
     }
 
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = OurJourney::find($id);
        
         return view('admin.pages.OurJourney.HumanFirst.OurJourneyUpdate',compact('data'));
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

        $record = $data->update([
            'img' => $imageName,
            'description' => $request->description,
            'type'=>$request->type,

        ]);

     
        //return "Data added successfully";
        return redirect(url('admin/ourjourney/humanfirst/index'))->with('success','Record Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $data = OurJourney::findOrFail($id);

        // Delete image file from folder (if exists)
        $imagePath = public_path('assets/uploads/OurJourney/' . $data->img);
        if (file_exists($imagePath) && is_file($imagePath)) {
            unlink($imagePath);
        }

        // Delete record from DB
        $data->delete();
     

          return redirect(url('admin/ourjourney/humanfirst/index'))->with('success', 'Record deleted successfully');

    }
    


    // Muhim page methods starts from here 


    public function muhimindex()
    {
        
        $infomuhim = OurJourney::where('type','Muhim')->paginate('6');
         return view('admin.pages.OurJourney.Muhim.JourneyMuhimList',compact('infomuhim'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function muhimJourneyForm()
    {
         return view('admin.pages.OurJourney.Muhim.JourneyMuhimCardForm');
    }

     /**
     * Show the form for editing the specified resource.
     */
    public function muhimedit(string $id)
    {
        $data = OurJourney::find($id);
        
         return view('admin.pages.OurJourney.Muhim.JourneyMuhimUpdate',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function muhimupdate(Request $request, string $id)
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

        $record = $data->update([
            'img' => $imageName,
            'description' => $request->description,
            'type'=>$request->type,

        ]);

     
        //return "Data added successfully";
        return redirect(url('admin/ourjourney/muhim/index'))->with('success','Record Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function muhimdestroy(string $id)
    {

        $data = OurJourney::findOrFail($id);

        // Delete image file from folder (if exists)
        $imagePath = public_path('assets/uploads/OurJourney/' . $data->img);
        if (file_exists($imagePath) && is_file($imagePath)) {
            unlink($imagePath);
        }

        // Delete record from DB
        $data->delete();
     

          return redirect(url('admin/ourjourney/muhim/index'))->with('success', 'Record deleted successfully');

    }
    





   
    
    // Jagrati page methods starts from here 

    public function jagratiindex()
    {
        
        $infojagrati = OurJourney::where('type','jagrati')->paginate('6');
         return view('admin.pages.OurJourney.Jagrati.JourneyJagratiList',compact('infojagrati'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function jagratiJourneyForm()
    {
         return view('admin.pages.OurJourney.Jagrati.JourneyjagratiForm');
    }

     /**
     * Show the form for editing the specified resource.
     */
    public function jagratiedit(string $id)
    {
        $data = OurJourney::find($id);
        
         return view('admin.pages.OurJourney.Jagrati.JourneyJagratiUpdate',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function jagratiupdate(Request $request, string $id)
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

        $record = $data->update([
            'img' => $imageName,
            'description' => $request->description,
            'type'=>$request->type,

        ]);

     
        //return "Data added successfully";
        return redirect(url('admin/ourjourney/jagrati/index'))->with('success','Record Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function jagratidestroy(string $id)
    {

        $data = OurJourney::findOrFail($id);

        // Delete image file from folder (if exists)
        $imagePath = public_path('assets/uploads/OurJourney/' . $data->img);
        if (file_exists($imagePath) && is_file($imagePath)) {
            unlink($imagePath);
        }

        // Delete record from DB
        $data->delete();
     

          return redirect(url('admin/ourjourney/jagrati/index'))->with('success', 'Record deleted successfully');

    }
    

     // Sneh page methods starts from here 

     public function snehindex()
     {
         
         $infosneh= OurJourney::where('type','Sneh')->paginate('6');
          return view('admin.pages.OurJourney.Sneh.JourneySnehList',compact('infosneh'));
     }
 
     /**
      * Show the form for creating a new resource.
      */
     public function snehJourneyForm()
     {
          return view('admin.pages.OurJourney.Sneh.JourneySnehForm');
     }
 
      /**
      * Show the form for editing the specified resource.
      */
     public function snehedit(string $id)
     {
         $data = OurJourney::find($id);
         
          return view('admin.pages.OurJourney.Sneh.JourneySnehUpdate',compact('data'));
     }
 
     /**
      * Update the specified resource in storage.
      */
     public function snehupdate(Request $request, string $id)
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
 
         $record = $data->update([
             'img' => $imageName,
             'description' => $request->description,
             'type'=>$request->type,
 
         ]);
 
      
         //return "Data added successfully";
         return redirect(url('admin/ourjourney/sneh/index'))->with('success','Record Updated successfully');
 
     }
 
     /**
      * Remove the specified resource from storage.
      */
     public function snehdestroy(string $id)
     {
 
         $data = OurJourney::findOrFail($id);
 
         // Delete image file from folder (if exists)
         $imagePath = public_path('assets/uploads/OurJourney/' . $data->img);
         if (file_exists($imagePath) && is_file($imagePath)) {
             unlink($imagePath);
         }
 
         // Delete record from DB
         $data->delete();
      
 
           return redirect(url('admin/ourjourney/sneh/index'))->with('success', 'Record deleted successfully');
 
     }
     
 
     // Muskaan page methods starts from here 

     public function muskanindex()
     {
         
         $infomuskan= OurJourney::where('type','Muskan')->paginate('6');
          return view('admin.pages.OurJourney.Muskaan.JourneyMuskanList',compact('infomuskan'));
     }
 
     /**
      * Show the form for creating a new resource.
      */
     public function muskanJourneyForm()
     {
          return view('admin.pages.OurJourney.Muskaan.JourneyMuskanForm');
     }
 
      /**
      * Show the form for editing the specified resource.
      */
     public function muskanedit(string $id)
     {
         $data = OurJourney::find($id);
         
          return view('admin.pages.OurJourney.Muskaan.JourneyMuskanUpdate',compact('data'));
     }
 
     /**
      * Update the specified resource in storage.
      */
     public function muskanupdate(Request $request, string $id)
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
 
         $record = $data->update([
             'img' => $imageName,
             'description' => $request->description,
             'type'=>$request->type,
 
         ]);
 
      
         //return "Data added successfully";
         return redirect(url('admin/ourjourney/muskan/index'))->with('success','Record Updated successfully');
 
     }
 
     /**
      * Remove the specified resource from storage.
      */
     public function muskandestroy(string $id)
     {
 
         $data = OurJourney::findOrFail($id);
 
         // Delete image file from folder (if exists)
         $imagePath = public_path('assets/uploads/OurJourney/' . $data->img);
         if (file_exists($imagePath) && is_file($imagePath)) {
             unlink($imagePath);
         }
 
         // Delete record from DB
         $data->delete();
      
 
           return redirect(url('admin/ourjourney/muskan/index'))->with('success', 'Record deleted successfully');
 
     }
     
 
 
 
 
 
 

}
