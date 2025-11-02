@extends('admin.layout.layout')
@section('content')

<div class="grid grid-cols-12 gap-5">
        <div class="col-span-12">
            
            <div class="card border-0">
                <div class="card-header">
                    <h5 class="text-lg font-semibold mb-0">Advisory team cards</h5>
                </div>
                <div class="card-body">
                    <form class="grid grid-cols-12 gap-4" action="{{ url('admin/advisory/update/'.$data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" value="advisory" name="type">
                    <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name"  value="{{ $data->name}}"required>
                        </div>                    
                    
                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Image</label>
                            <input type="file" name="img" class="form-control">
                        </div>
                        <div class="md:col-span-6 col-span-12 mt-3">
                            <label class="form-label">Current Image:</label>
                              <img src="{{ asset('assets/uploads/teamcard/'.$data->img) }}" alt="" style="width:200px; height:80px;">
                        </div>
                        <div class="md:col-span-12 col-span-12">
                            <label class="form-label">Description</label>
                            <textarea name="msg" class="form-control" rows="4" cols="50" placeholder="Enter a description...">{{ $data->description }}</textarea>
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