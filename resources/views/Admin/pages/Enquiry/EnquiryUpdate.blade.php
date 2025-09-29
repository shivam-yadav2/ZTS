@extends('admin.layout.layout')
@section('content')

<div class="grid grid-cols-12 gap-5">
        <div class="col-span-12">
            
            <div class="card border-0">
                <div class="card-header">
                    <h5 class="text-lg font-semibold mb-0">Enquiry</h5>
                </div>
                <div class="card-body">
                    <form class="grid grid-cols-12 gap-4" action="{{ url('admin/enquiry/update/'.$enquiry->id) }}" method="post">
                        @csrf
                    <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{ $enquiry->name}}"required>
                        </div>
                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Mobile</label>
                            <input type="number" name="mobile" class="form-control" placeholder="Enter Phone number" value="{{ $enquiry->mobile}}"required>
                        </div>
                        
                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Email"value="{{ $enquiry->email}}" required>
                        </div>
                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Subject</label>
                            <input type="text" name="subject" class="form-control" placeholder="Enter subject"value="{{ $enquiry->subject}}" required>
                        </div>
                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Message</label>
                            <textarea name="msg" class="form-control" rows="4" cols="50" placeholder="Enter a description...">{{ $enquiry->msg}}</textarea>
                        </div>
                        

                        <div class="col-span-12">
                            <button class="btn btn-primary-600" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
@endsection