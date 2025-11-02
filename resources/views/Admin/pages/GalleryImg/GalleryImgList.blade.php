@extends('admin.layout.layout')
@section('content')
   
<div class="card h-full p-0 rounded-xl overflow-hidden border-0">
    <div class="card-header border-b px-6 py-4">
        <div class="flex justify-between items-center mb-3">
            <div>
                <h5 class="text-xl font-semibold mb-0">{{ $event->event_name }}</h5>
                <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Manage gallery images for this event</p>
            </div>
            <a href="{{ url('admin/showForm') }}" class="btn border border-indigo-600 text-indigo-600 hover:bg-indigo-600 hover:text-white rounded-lg px-5 py-[5px] flex items-center gap-2">
                <i class="fa-solid fa-plus"></i> Add More Images
            </a>
        </div>
        <div class="flex items-center gap-3">
            <a href="{{ url('admin/events') }}" class="inline-flex items-center gap-2 text-sm text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-100">
                <i class="fa-solid fa-arrow-left"></i> Back to Events
            </a>
            <span class="text-gray-300">|</span>
            <a href="{{ url('/gallery-detail/'.$event->id) }}" target="_blank" class="inline-flex items-center gap-2 text-sm text-indigo-600 hover:text-indigo-800">
                <i class="fa-solid fa-external-link"></i> View on Website
            </a>
        </div>
    </div>
    <div class="card-body p-6">
        <div id="default-tab-content">
            <div class="" id="all" role="tabpanel" aria-labelledby="all-tab">
                @if($images->count() > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 2xl:grid-cols-4 gap-6">
                    @foreach ($images as $value)
                    <div class="hover-scale-img border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden">
                        <div class="max-h-[266px] overflow-hidden">
                            <img src="{{ asset('assets/uploads/galleryimg/'.$value->img) }}" alt="" class="hover-scale-img__img w-full h-full object-fit-cover">
                        </div>
                        <div class="py-4 px-6 items-center text-center">
                            <form action="{{ url('admin/delete/'.$value->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this image?');" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-red-600 hover:bg-red-700 text-white transition">
                                    <i class="fa-solid fa-trash text-sm"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <div class="text-center py-12">
                    <div class="inline-block p-4 bg-gray-100 dark:bg-gray-800 rounded-full mb-4">
                        <i class="fa-solid fa-images text-4xl text-gray-400"></i>
                    </div>
                    <h6 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-2">No images yet</h6>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">Start by adding some images to this event</p>
                    <a href="{{ url('admin/showForm') }}" class="inline-flex items-center gap-2 btn bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg px-6 py-3">
                        <i class="fa-solid fa-plus"></i> Add Images
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection