@extends('admin.layout.layout')

@section('content')
<div class="grid grid-cols-12 gap-5">
    <div class="md:col-span-6 col-span-12">
        <form action="{{ url('admin/galleryimg/store') }}" method="post" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <div class="card border-0 shadow-sm rounded-lg">
                <div class="card-header border-b px-6 py-4">
                    <h5 class="text-xl font-semibold text-gray-800">Gallery Image</h5>
                </div>
                <div class="card-body px-6 py-5 space-y-5">
                    
                    <!-- Event Select -->
                    <div class="col-span-12">
                        <label class="block text-sm font-medium text-white mb-2">Event</label>
                        <select name="event_id" class="w-full rounded-lg  focus:border-white focus:ring focus:ring-blue-200 text-gray-700 bg-transparent">
                            @foreach ($events as $value)
                                <option value="{{ $value->id }}">{{ $value->event_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Event Image Upload -->
                    <div class="col-span-12">
                        <label class="block text-sm font-medium text-white mb-2">Event Images</label>
                        <input type="file" name="event_img[]" multiple
                            class="block w-full text-sm text-gray-700 border border-gray-300 rounded-lg cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-blue-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                        <p class="text-xs text-gray-500 mt-1">You can select multiple images</p>
                    </div>

                    <!-- Submit -->
                    <div class="pt-3  col-span-6">
                        <button type="submit" class=" w-full btn bg-primary-700 hover:text-white rounded-lg px-6 py-[14px]">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection