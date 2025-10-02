@extends('admin.layout.layout')
 @section('content')
 

<div class="grid grid-cols-12 gap-5">
   
    <div class="md:col-span-6 col-span-12">
    @if ($errors->any())
    <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
        <ul class="list-disc pl-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{ url('admin/coremember/store') }}" method="post" enctype="multipart/form-data"> 
    @csrf
        <div class="card border-0">
            <div class="card-header">
                <h6 class="text-lg font-semibold mb-0">Event Form</h6>
            </div>
            <div class="card-body">
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12">
                        <label class="form-label"> name:</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    
                
                    <div class="col-span-12">
                            <label class="form-label">Image: </label>
                            <input class="border border-neutral-200 dark:border-neutral-600 w-full rounded-lg text-lg" name="img" type="file">
                        </div>

                        <div class="lg:col-span-12 col-span-12">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="4" cols="50" name="description" placeholder="Enter a description..."> </textarea>
                        </div>

                      <div class="col-span-12">
                      <button type="submit" class="btn bg-primary-100 text-primary-600 hover:bg-primary-700 hover:text-white rounded-lg px-6 py-[14px]">  Add</button>
                      </div>
                </div>
            </div>
        </div><!-- card end -->
        </form> 
    </div>

    
</div>
@endsection