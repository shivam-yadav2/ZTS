@extends('admin.layout.layout')
@section('content')
<div class="grid grid-cols-12 gap-5">
        <div class="col-span-12">
            <div class="card border-0">
                <div class="card-header">
                    <h5 class="text-lg font-semibold mb-0">Update Event</h5>
                </div>
                <div class="card-body">
                    <form class="grid grid-cols-12 gap-4" action="{{ route('events.update',$data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Event name</label>
                            <input type="text" name="event_name" class="form-control" value="{{ $data->event_name}}" required>
                        </div>
                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Event Date</label>
                            <input type="date" name="event_date" value="{{ $data->event_date }}" class="form-control">
                        </div>
                        <div class="md:col-span-12 col-span-12">
                            <label class="form-label">Event Image</label>
                            <input class="border border-neutral-200 dark:border-neutral-600 w-full rounded-lg" type="file" name="event_img">
                        </div>
                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Current Image</label>
                            <img src="{{ asset('assets/uploads/events/'.$data->event_img) }}" alt="Current Image" style="width:200px; height:100px; object-fit:cover;">
                        </div>
                        <div class="md:col-span-12 col-span-12">
                            <label class="form-label">Event description</label>
                            <textarea name="event_description" class="form-control" rows="4" placeholder="Enter event description">{{ $data->event_description }}</textarea>
                        </div>
                        <div class="col-span-12">
                            <button class="btn btn-primary-600" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
@endsection