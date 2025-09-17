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
        return view('admin.contact.ContactList', compact('contacts'));
    }
    public function showForm(){
        return view('admin.Contact.ContactForm');
    }
    public function store(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'whatsapp' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ]);

        ContactUs::create([
            'phone' => [$request->phone],  // store as array
            'whatsapp_number' => [$request->whatsapp],
            'email' => [$request->email],
            'location' => [$request->address],
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
       return view('admin.Contact.ContactUpdate', compact('contact'));
   }

   /** Update a contact record.
   */
  public function update(Request $request, $id)
  {
      $request->validate([
          'phone' => 'required',
          'whatsapp' => 'required',
          'email' => 'required|email',
          'address' => 'required',
      ]);

      $contact = ContactUs::findOrFail($id);

      $contact->update([
          'phone' => [$request->phone],
          'whatsapp_number' => [$request->whatsapp],
          'email' => [$request->email],
          'location' =>[$request->address],
      ]);

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
