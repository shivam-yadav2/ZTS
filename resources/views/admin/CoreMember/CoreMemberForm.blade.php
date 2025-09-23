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
    <form class="row" action="{{url('admin/coremember/store')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="mb-3  col-6">
        <label for="example-fileinput" class="form-label"> Image:</label>
        <input type="file" id="example-fileinput" class="form-control" name="img">
      </div>

      <div class="mb-3 col-6 ">
        <label for="simpleinput" class="form-label"> Name:</label>
        <input type="text" id="simpleinput" class="form-control" name="name">
      </div>

      <div class="mb-3 col-12">
        <label for="example-email" class="form-label"> description</label>
        <input type="text" id="example-email" name="description" class="form-control" placeholder="Enter description">
      </div>

      <div class="mb-3 col-12">
               <button  type="submit" class="btn w-100" style="background-color: #343B4A; color:white;">Add Member</button>
      </div>
    </form>
  </div>
@endsection