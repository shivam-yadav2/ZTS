@extends('master.layout')
@section('style')
<style>
  .row{
   width:800px;
}
</style>
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
    <div class="form d-flex justify-content-center">
    <form class="row" action="{{url('admin/events/'.$data->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="mb-3 col-6 ">
        <label for="simpleinput" class="form-label">Event Name:</label>
        <input type="text" id="simpleinput" class="form-control" name="event_name" value="{{$data->event_name}}">
      </div>

          <!-- Event Image -->
    <div class="mb-2 col-6">
        <label for="event_img" class="form-label">Event Image</label>
        <input class="form-control" type="file" id="event_img" name="event_img" accept="image/*" onchange="previewImage(event)">
        <div class="image-preview" id="imagePreview" >
          <span class="text-muted">Image preview will appear here</span>
        </div>
      </div>
      <div class="mb-3 col-6">
        <label for="example-email" class="form-label">Event description</label>
        <textarea name="event_description" id="" class=" form-control w-100  h-50"> {{$data->event_description}}</textarea>
      </div>

      <div class="mb-3 col-6">
        <label for="example-date" class="form-label">Date</label>
        <input class="form-control" id="example-date" type="date" name="event_date" value="{{$data->event_date}}">
      </div>
    <!-- Show old image -->
    @if(!empty($data->event_img))
      <div class="mb-1 col-12">
        <label class="form-label">Current Event Image</label>
        <div class="image-preview">
          <img src="{{ asset('assets/uploads/events/'.$data->event_img) }}" alt="Event Image" style="height:170px;" class="w-50">
        </div>
      </div>
    @endif


        
      <div class="mb-3 col-12">
               <button  type="submit" class="btn w-100" style="background-color: #343B4A; color:white;">Update Event</button>
      </div>
    </form>
    </div>
 
  </div>
  <script>
    // Preview image before upload
    function previewImage(event) {
      const preview = document.getElementById('imagePreview');
      preview.innerHTML = ""; // Clear old preview

      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          const img = document.createElement("img");
          img.src = e.target.result;
          preview.appendChild(img);
        }
        reader.readAsDataURL(file);
      } else {
        preview.innerHTML = '<span class="text-muted">Image preview will appear here</span>';
      }
    }

  
  </script>
@endsection