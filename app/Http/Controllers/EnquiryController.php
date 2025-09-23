<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use Illuminate\Http\Request;


class EnquiryController extends Controller
{
    public function index()
    {
        $enquiry = Enquiry::all();
        return view('admin.Enquiry.EnquiryList', compact('enquiry'));
    }
    public function enquiryForm(){
        return view('admin.Enquiry.AddEnquiryForm');
    }
    public function store(Request $request)
    {
      $record=  $request->validate([
            'name' => 'required|min:2',
            'mobile' => 'required|max:10',
            'email' => 'required|email',
            'subject' => 'required',
            'msg' => 'required',
         
        ]);

        Enquiry::create([
            'name' => $request->name,  
            'mobile' => $request->mobile,
            'email' => $request->email,
            'subject' => $request->subject,
            'msg' => $request->msg,
        ]);

        return redirect('admin/enquiry/index')->with('success', 'Enquiry added successfully!');
    }

    

   public function edit($id)
   {
       $enquiry = Enquiry::findOrFail($id);
       return view('admin.Enquiry.EnquiryUpdate', compact('enquiry'));
   }

   /** Update a contact record.
   */
  public function update(Request $request, $id)
  {
      $request->validate([
          'name' => 'required',
          'mobile' => 'required',
          'email' => 'required|email',
          'subject' => 'required',
          'msg' => 'required',
      ]);

      $enquiry = Enquiry::findOrFail($id);

      $enquiry->update([
          'name' => $request->name,
          'mobile' => $request->mobile,
          'email' => $request->email,
          'subject' =>$request->subject,
          'msg' =>$request->msg,
      ]);

      return redirect('admin/enquiry/index')->with('success', 'Enquiry updated successfully!');
  }

    /**
     * Delete a contact record.
     */
    public function destroy($id)
    {
        $enquiry = Enquiry::findOrFail($id);
        $enquiry->delete();

        return redirect('admin/enquiry/index')->with('success', 'Enquiry deleted successfully!');
    }
}
