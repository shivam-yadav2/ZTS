@extends('master.layout')
@section('content')
<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                                <h4 class="header-title">Contact Us</h4>
                            </div>

                            <div class="card-body">
                             
                                <form class="needs-validation" novalidate action="{{ url('admin/update/'.$contact->id) }}" method="post">
                                    @csrf
                                    <div class="mb-3 col-6">
                                        <label class="form-label" for="validationCustom01">Phone Number</label>
                                        <input type="text" class="form-control w-100" id="validationCustom01" placeholder="Phone number" value="{{ $contact->phone[0] ?? '' }}" required name="phone">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label class="form-label" for="validationCustom02">Whatsapp Number</label>
                                        <input type="text" class="form-control w-100" id="validationCustom02" placeholder="Whatsapp number" value="{{ $contact->whatsapp_number[0] ?? '' }}" required name="whatsapp">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label class="form-label" for="validationCustom02">Email</label>
                                        <input type="text" class="form-control w-100" id="validationCustom02" placeholder="Email" value="{{ $contact->email[0] ?? '' }}" required name="email">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label class="form-label" for="validationCustom02">Location</label>
                                        <input type="text" class="form-control w-100" id="validationCustom02" placeholder="Address" value="{{ $contact->location[0] ?? '' }}" required name="address">
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