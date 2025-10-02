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

    <form action="{{ url('admin/guidingprinciple/update/'.$data->id) }}" method="post" enctype="multipart/form-data"> 
    @csrf
    @method('PUT')
        <div class="card border-0">
            <div class="card-header">
                <h6 class="text-lg font-semibold mb-0">Guiding Principle</h6>
            </div>
            <div class="card-body">
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12">
                        <label class="form-label">Image:</label>
                        <input type="file" name="icon" class="form-control">
                    </div>

                    <div class="col-span-12">
                        <label class="form-label"> Current Image:</label>
                       <img src="{{ asset('assets/uploads/GuidingPrinciple/'.$data->icon) }}" alt="" style="width:100px; height:100px;">
                    </div>

                    <div class="col-span-12">
                        <label class="form-label"> Heading:</label>
                        <input type="text" name="heading" class="form-control" value="{{ $data->heading}}">
                    </div>
                
                    <div class="col-span-12">
                            <label class="form-label">Description: </label>
                            <input class=" bg-transparent border border-neutral-200 dark:border-neutral-600 w-full rounded-lg text-lg" name="description" type="text" value="{{ $data->description }}">
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