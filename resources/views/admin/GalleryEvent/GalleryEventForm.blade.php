@extends('master.layout')
@section('style')

@endsection
@section('content')
  <div class="container mt-5">
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
    <form class="row" action="{{url('admin/events')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="mb-3 col-6 ">
        <label for="simpleinput" class="form-label">Event Name:</label>
        <input type="text" id="simpleinput" class="form-control" name="event_name">
      </div>

      <div class="mb-3 col-6">
        <label for="example-email" class="form-label">Event description</label>
        <input type="text" id="example-email" name="event_description" class="form-control" placeholder="Enter Event description">
      </div>

      <div class="mb-3 col-6">
        <label for="example-date" class="form-label">Date</label>
        <input class="form-control" id="example-date" type="date" name="event_date">
      </div>

      <div class="mb-3  col-6">
        <label for="example-fileinput" class="form-label">Event Image:</label>
        <input type="file" id="example-fileinput" class="form-control" name="event_img">
      </div>
        
      <div class="mb-3 col-12">
               <button  type="submit" class="btn w-100" style="background-color: #343B4A; color:white;">Create Event</button>
      </div>
    </form>
  </div>
@endsection