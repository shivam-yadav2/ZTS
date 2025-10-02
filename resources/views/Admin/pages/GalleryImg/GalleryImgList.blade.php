@extends('admin.layout.layout')
@section('content')
   

<div class="card h-full p-0 rounded-xl overflow-hidden border-0">
<div class="card-body p-6">

<div id="default-tab-content">
    <div class="" id="all" role="tabpanel" aria-labelledby="all-tab">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 2xl:grid-cols-4 gap-6">
            @foreach ($images as $value)
            
          
            <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                <div class="max-h-[266px] overflow-hidden">
                    <img src="{{ asset('assets/uploads/galleryimg/'.$value->img) }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                </div>
                <div class="py-4 px-6 items-center text-center">
                <form action="{{ url('admin/delete/'.$value->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
    @csrf
    @method('DELETE')
    <button type="submit"><i class="fa-solid fa-trash"></i></button>
</form>

                </div>
            </div>
       
            @endforeach
        </div>
    </div>
 
</div>
</div>
</div>
@endsection