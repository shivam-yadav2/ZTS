@extends('admin.layout.layout')
@section('content')

<div class="grid grid-cols-12 gap-5">
<div class="md:col-span-6 col-span-12">
    <form action="{{ url('admin/store') }}" method="post">
        @csrf
                  <div class="card border-0">
             
                <div class="card-body">

                <div class="grid grid-cols-12 gap-y-4 items-center mb-6">
                        <label class="form-label mb-0 sm:col-span-2 col-span-12">Phone</label>
                        <div class="sm:col-span-10 col-span-12">
                            <div class="icon-field">
                                <span class="icon">
                                    <iconify-icon icon="solar:phone-calling-linear"></iconify-icon>
                                </span>
                                <input type="text" name="phone" class="form-control" placeholder="+1 (555) 000-0000">
                            </div>
                        </div>
                    </div>


                  
                    <div class="grid grid-cols-12 gap-y-4 items-center mb-6">
                        <label class="form-label mb-0 sm:col-span-2 col-span-12">Whatsapp number</label>
                        <div class="sm:col-span-10 col-span-12">
                            <div class="icon-field">
                                <span class="icon">
                                    <iconify-icon icon="f7:person"></iconify-icon>
                                </span>
                                <input type="text" name="whatsapp" class="form-control" placeholder="Enter whatsapp number">
                            </div>
                        </div>
                    </div>

                   
                    <div class="grid grid-cols-12 gap-y-4 items-center mb-6">
                        <label class="form-label mb-0 sm:col-span-2 col-span-12">Email</label>
                        <div class="sm:col-span-10 col-span-12">
                            <div class="icon-field">
                                <span class="icon">
                                    <iconify-icon icon="mage:email"></iconify-icon>
                                </span>
                                <input type="text" name="email" class="form-control" placeholder="Enter Email">
                            </div>
                        </div>
                    </div>

                <div class="grid grid-cols-12 gap-y-4 items-center mb-6">
                        <label class="form-label mb-0 sm:col-span-2 col-span-12">Location</label>
                        <div class="sm:col-span-10 col-span-12">
                            <div class="icon-field">
                                <span class="icon">
                                <iconify-icon icon="mdi:map-marker"></iconify-icon>
                                </span>
                                <input type="text" name="location" class="form-control" placeholder="Enter Location">
                            </div>
                        </div>
                    </div>
                 
                  
                    <button type="submit" class="btn btn-primary-600">Submit</button>
                </div>
            </div>
            </form>
        </div>
</div>
@endsection