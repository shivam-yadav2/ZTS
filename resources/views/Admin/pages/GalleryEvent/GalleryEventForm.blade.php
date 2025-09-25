 @extends('Admin.layout.layout')
 @section('content')
 

<div class="grid grid-cols-12 gap-5">
    <div class="md:col-span-6 col-span-12">
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
                      <button type="button" class="btn bg-primary-100 text-primary-600 hover:bg-primary-700 hover:text-white rounded-lg px-6 py-[14px]"> Large Button</button>
                      </div>
                </div>
            </div>
        </div><!-- card end -->
        
    </div>
</div>
@endsection