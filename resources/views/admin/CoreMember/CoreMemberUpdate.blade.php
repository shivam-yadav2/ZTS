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
    <form class="row" action="{{url('admin/coremember/update/'.$data->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="mb-3 col-6 ">
        <label for="simpleinput" class="form-label"> Name:</label>
        <input type="text" id="simpleinput" class="form-control" name="name" value="{{$data->name}}">
      </div>

          <!-- Event Image -->
    <div class="mb-2 col-6">
        <label for="img" class="form-label"> Image</label>
        <input class="form-control" type="file" id="img" name="img" accept="image/*" onchange="previewImage(event)">
        <div class="image-preview" id="imagePreview" >
          <span class="text-muted">Image preview will appear here</span>
        </div>
      </div>
      <div class="mb-3 col-6">
        <label for="example-email" class="form-label"> description</label>
        <textarea name="description" id="" class="form-control w-100  h-50">{{$data->description}}</textarea>
      </div>

     
    <!-- Show old image -->
    @if(!empty($data->img))
      <div class="mb-1 col-12">
        <label class="form-label">Current Image</label>
        <div class="image-preview">
          <img src="{{ asset('assets/uploads/CoreMember/'.$data->img) }}" alt="Event Image" style="height:170px;" class="w-50">
        </div>
      </div>
    @endif
   
      <div class="mb-3 col-12">
               <button  type="submit" class="btn w-100" style="background-color: #343B4A; color:white;">Update</button>
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