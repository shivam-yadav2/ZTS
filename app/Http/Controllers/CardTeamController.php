<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeamCard;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class CardTeamController extends Controller
{

    // Core member methods starts from here

    // Show all records
    public function index()
    {
        $data = TeamCard::where('type','coremember')->paginate('5');
        return view('admin.pages.TeamCard.Member.MemberTeamCardList', compact('data'));
    }

    // Show the add form
    public function showForm()
    {
        return view('admin.pages.TeamCard.Member.MemberTeamCardForm');
    }

    // Store new record
    public function store(Request $request)
    {
   
        $request->validate([
            'name' => 'required|string|max:255',
            'img' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'msg' => 'required|string',
            'type'=>'required',
        ]);
  
        $team = new TeamCard();
        $team->name = $request->name;
        $team->description = $request->msg;
        $team->type=$request->type;

        // Handle image upload with Intervention Image
        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '.webp';
            $destinationPath = public_path('assets/uploads/teamcard');

            // Create ImageManager with GD driver
            $manager = new ImageManager(new Driver());

            // Read, resize, encode, and save as WebP
            $manager->read($image)
                ->scale(width: 800) // maintain aspect ratio
                ->toWebp(90)
                ->save($destinationPath . '/' . $imageName);
            
            $team->img = $imageName;
        }

        $team->save();

        return redirect()->back()->with('success', 'Team member added successfully!');
    }

    // Show edit form
    public function edit($id)
    {
        $data = TeamCard::findOrFail($id);
        return view('admin.pages.TeamCard.Member.MemberUpdateCard', compact('data'));
    }

    // Update record
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'img' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'msg' => 'nullable|string',
        ]);

        $team = TeamCard::findOrFail($id);
        $team->name = $request->name;
        $team->description = $request->msg;
        $team->type=$request->type;
        
        // Handle image update with Intervention Image
        if ($request->hasFile('img')) {
            // Delete old image if exists
            $oldPath = public_path('assets/uploads/teamcard/' . $team->img);
            if (File::exists($oldPath)) {
                File::delete($oldPath);
            }

            $image = $request->file('img');
            $imageName = time() . '.webp';
            $destinationPath = public_path('assets/uploads/teamcard');

            // Create ImageManager with GD driver
            $manager = new ImageManager(new Driver());

            // Read, resize, encode, and save as WebP
            $manager->read($image)
                ->scale(width: 800) // maintain aspect ratio
                ->toWebp(90)
                ->save($destinationPath . '/' . $imageName);
            
            $team->img = $imageName;
        }

        $team->save();

        return redirect('admin/teamcard/index')->with('success', 'Team member updated successfully!');
    }

    // Delete record
    public function destroy($id)
    {
        $team = TeamCard::findOrFail($id);

        // Delete image
        $path = public_path('assets/uploads/teamcard/' .$team->img);
        if (File::exists($path)) {
            File::delete($path);
        }

        $team->delete();

        return redirect()->back()->with('success', 'Team member deleted successfully!');
    }


    // Advisory section cards starts form here 
    // store method already made on above
    public function advisoryindex()
    {
        $advisory_data = TeamCard::where('type', 'advisory')->paginate('5');
        return view('admin.pages.TeamCard.Advisory.AdvisoryTeamCardList', compact('advisory_data'));
    }

    // Show the add form
    public function  advisoryshowForm()
    {
        return view('admin.pages.TeamCard.Advisory.AdvisoryTeamCardForm');
    }

      public function advisorydestroy($id)
    {
        $team = TeamCard::findOrFail($id);

        // Delete image
        $path = public_path('assets/uploads/teamcard/' .$team->img);
        if (File::exists($path)) {
            File::delete($path);
        }

        $team->delete();

        return redirect()->back()->with('success', 'Team member deleted successfully!');
    }

     // Show edit form
     public function advisoryedit($id)
     {
         $data = TeamCard::findOrFail($id);
         return view('admin.pages.TeamCard.Advisory.AdvisoryUpdateCard', compact('data'));
     }
 
     // Update record
     public function advisoryupdate(Request $request, $id)
     {
         $request->validate([
             'name' => 'nullable|string|max:255',
             'img' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
             'msg' => 'nullable|string',
         ]);
 
         $team = TeamCard::findOrFail($id);
         $team->name = $request->name;
         $team->description = $request->msg;
         $team->type=$request->type;
         
         // Handle image update with Intervention Image
         if ($request->hasFile('img')) {
             // Delete old image if exists
             $oldPath = public_path('assets/uploads/teamcard/' .$team->img);
             if (File::exists($oldPath)) {
                 File::delete($oldPath);
             }
 
             $image = $request->file('img');
             $imageName = time() . '.webp';
             $destinationPath = public_path('assets/uploads/teamcard');

             // Create ImageManager with GD driver
             $manager = new ImageManager(new Driver());

             // Read, resize, encode, and save as WebP
             $manager->read($image)
                 ->scale(width: 800) // maintain aspect ratio
                 ->toWebp(90)
                 ->save($destinationPath . '/' . $imageName);
             
             $team->img = $imageName;
         }
 
         $team->save();
 
         return redirect('admin/advisory/index')->with('success', 'Team member updated successfully!');
     }



      // Leadership  section cards starts form here 
    // store method already made on above
    public function leadershipindex()
    {
        $leadership_data = TeamCard::where('type', 'leadership')->get();
        return view('admin.pages.TeamCard.Leadership.LeadershipTeamCardList', compact('leadership_data'));
    }

    // Show the add form
    public function  leadershipshowForm()
    {
        return view('admin.pages.TeamCard.Leadership.LeadershipTeamCardForm');
    }

      public function leadershipdestroy($id)
    {
        $team = TeamCard::findOrFail($id);

        // Delete image
        $path = public_path('assets/uploads/teamcard/' .$team->img);
        if (File::exists($path)) {
            File::delete($path);
        }

        $team->delete();

        return redirect()->back()->with('success', 'Team member deleted successfully!');
    }

     // Show edit form
     public function leadershipedit($id)
     {
         $data = TeamCard::findOrFail($id);
         return view('admin.pages.TeamCard.Leadership.LeadershipUpdateCard', compact('data'));
     }
 
     // Update record
     public function leadershipupdate(Request $request, $id)
     {
         $request->validate([
             'name' => 'nullable|string|max:255',
             'img' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
             'msg' => 'nullable|string',
         ]);
 
         $team = TeamCard::findOrFail($id);
         $team->name = $request->name;
         $team->description = $request->msg;
         $team->type=$request->type;
         
         // Handle image update with Intervention Image
         if ($request->hasFile('img')) {
             // Delete old image if exists
             $oldPath = public_path('assets/uploads/teamcard/' .$team->img);
             if (File::exists($oldPath)) {
                 File::delete($oldPath);
             }
 
             $image = $request->file('img');
             $imageName = time() . '.webp';
             $destinationPath = public_path('assets/uploads/teamcard');

             // Create ImageManager with GD driver
             $manager = new ImageManager(new Driver());

             // Read, resize, encode, and save as WebP
             $manager->read($image)
                 ->scale(width: 800) // maintain aspect ratio
                 ->toWebp(90)
                 ->save($destinationPath . '/' . $imageName);
             
             $team->img = $imageName;
         }
 
         $team->save();
 
         return redirect('admin/leadership/index')->with('success', 'Team member updated successfully!');
     }
}
