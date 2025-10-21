 @extends('admin.layout.layout')
 @section('content')
 

<div class="min-h-screen flex justify-center items-center">
   
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

    <form action="{{ url('admin/events') }}" method="post" enctype="multipart/form-data"> 
    @csrf
        <div class="card border-0">
            <div class="card-header">
                <h6 class="text-lg font-semibold mb-0">Event Form</h6>
            </div>
            <div class="card-body">
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12">
                        <label class="form-label">Event name:</label>
                        <input type="text" name="event_name" class="form-control">
                    </div>
                    <div class="col-span-12">
                        <label class="form-label">Event description:</label>
                        <input type="text" name="event_description" class="form-control">
                    </div>
                    <div class="col-span-12">
                        <label class="form-label">Event Date: </label>
                        <input type="date" class="form-control grow"  name="event_date">
                    </div>


                    <div class="col-span-12">
                            <label class="form-label">Event Image </label>
                            <input class="border border-neutral-200 dark:border-neutral-600 w-full rounded-lg text-lg" name="event_img" type="file">
                        </div>
                      <div class="col-span-12">
                      <button type="submit" class="btn bg-primary-100 text-primary-600 hover:bg-primary-700 hover:text-white rounded-lg px-6 py-[14px]">Submit</button>
                      </div>
                </div>
            </div>
        </div><!-- card end -->
        </form> 
    </div>

    
</div>
@endsection