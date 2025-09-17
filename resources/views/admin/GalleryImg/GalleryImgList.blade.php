@extends('master.layout')
@section('content')
  <div class="container">
    <div class="row ">
        @foreach ($images as $value )
        <div class="col-2 mt-3 ">
<img src="{{ asset('assets/uploads/galleryimg/'.$value->img) }}" alt="" style="width:100%; height:135px;">
<form action="{{ url('admin/delete', $value->id) }}" method="post" style="display:inline;">
    @csrf
    @method('delete')
    <button type="submit" style="border:none;background:none;cursor:pointer;">
        <i class="fa-solid fa-trash text-danger"></i>
    </button>
</form>

</div> 
        @endforeach
    </div>
  </div>

@endsection