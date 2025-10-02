<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    public function index()
    {
        $contacts = ContactUs::all();
        return view('admin.pages.contact.ContactList', compact('contacts'));
    }
    public function showForm(){
        return view('admin.pages.Contact.ContactForm');
    }
    public function store(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'whatsapp' => 'required',
            'email' => 'required',
            'location' => 'required',
        ]);     
    //  dd($request->all()); 

    $phones = array_map('trim', explode(',', $request->phone));
$whatsapps = array_map('trim', explode(',', $request->whatsapp));
$emails = array_map('trim', explode(',', $request->email));
$locations = array_map('trim', explode(',', $request->location));


ContactUs::create([
    'phone' => $phones,
    'whatsapp_number' => $whatsapps,
    'email' => $emails,
    'location' => $locations,
]);


        return redirect('admin/index')->with('success', 'Contact created successfully!');
    }

    
    //  show each record
//    public function show($id)
//    {
//        $contact = ContactUs::findOrFail($id);
//        return view('admin.contact.show', compact('contact'));
//    }

   /**
    * Show edit form.
    */
   public function edit($id)
   {
       $contact = ContactUs::findOrFail($id);
       return view('admin.pages.Contact.ContactUpdate', compact('contact'));
   }

   /** Update a contact record.
   */
  public function update(Request $request, $id)
  {
      // Find the contact entry
      $contact = ContactUs::findOrFail($id);
  
      // 1️⃣ Validate input
      $request->validate([
          'phone' => 'required',
          'whatsapp' => 'required',
          'email' => 'required',
          'location' => 'required',
      ]);
  
      // 2️⃣ Split comma-separated values and trim
      $phones = array_map('trim', explode(',', $request->phone));
      $whatsapps = array_map('trim', explode(',', $request->whatsapp));
      $emails = array_map('trim', explode(',', $request->email));
      $locations = array_map('trim', explode(',', $request->location));
  
      // 3️⃣ Validate each email individually
      foreach ($emails as $email) {
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              return back()->withErrors(['email' => 'One or more emails are invalid']);
          }
      }
  
      // 4️⃣ Update the record
      $contact->update([
          'phone' => $phones,
          'whatsapp_number' => $whatsapps,
          'email' => $emails,
          'location' => $locations,
      ]);
  
      // 5️⃣ Redirect with success message
      return redirect('admin/index')->with('success', 'Contact updated successfully!');
  }
  

    /**
     * Delete a contact record.
     */
    public function destroy($id)
    {
        $contact = ContactUs::findOrFail($id);
        $contact->delete();
        return redirect('admin/index')->with('success', 'Contact deleted successfully!');
    }
}
