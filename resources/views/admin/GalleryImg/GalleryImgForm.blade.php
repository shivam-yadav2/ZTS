@extends('master.layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card shadow-lg border-0 rounded-4" style="max-width: 450px; width: 100%;">
        <div class="card-body p-4">
            <h4 class="text-center mb-4 fw-bold text-primary">Upload Event Image</h4>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ url('store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <select name="event_id" class="form-control" required>
        @foreach($events as $event)
            <option value="{{ $event->id }}">{{ $event->event_name }}</option>
        @endforeach
    </select>
    
                <div class="mb-4">
                    <label for="img" class="form-label fw-semibold">Select Image</label>
                    <input type="file" name="img" id="img" 
                           class="form-control form-control-lg shadow-sm" 
                           accept="image/*" required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg shadow-sm rounded-3">
                        <i class="fa-solid fa-upload me-2"></i> Upload
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
