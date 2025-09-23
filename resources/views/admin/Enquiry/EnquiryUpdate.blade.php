@extends('master.layout')
@section('content')
<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                                <h4 class="header-title">Enquiry Form</h4>
                            </div>

                            <div class="card-body">
                                 {{-- Show validation errors --}}
     @if($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
                                <form class="needs-validation" novalidate action="{{ url('admin/enquiry/update/'.$enquiry->id) }}" method="post">
                                    @csrf
                                    <div class="mb-3 col-6">
                                        <label class="form-label" for="validationCustom01">Name</label>
                                        <input type="text" class="form-control w-100" id="validationCustom01" placeholder="Name" value="{{ $enquiry->name }}" required name="name">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label class="form-label" for="validationCustom02">Mobile</label>
                                        <input type="text" class="form-control w-100" id="validationCustom02" placeholder="Mobile" value="{{ $enquiry->mobile}}" required name="mobile">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label class="form-label" for="validationCustom02">Email</label>
                                        <input type="text" class="form-control w-100" id="validationCustom02" placeholder="Email" value="{{ $enquiry->email}}" required name="email">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label class="form-label" for="validationCustom02">Subject</label>
                                        <input type="text" class="form-control w-100" id="validationCustom02" placeholder="Subject" value="{{ $enquiry->subject}}" required name="subject">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>

                                    <div class="mb-3 col-6">
                                        <label class="form-label" for="validationCustom02">Message</label>
                                         <textarea name="msg" id="" class="w-100">{{ $enquiry->subject }}</textarea>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                  
                                    <button class="btn btn-primary" type="submit">Update</button>
                                </form>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->


                  
                </div>
@endsection