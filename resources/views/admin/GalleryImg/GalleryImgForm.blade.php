@extends('master.layout')
@section('style')

@endsection
@section('content')
    <div class="card">
        <div class="card-header border-bottom border-dashed d-flex align-items-center">
            <h4 class="header-title">File Upload</h4>
        </div>

        <div class="card-body">

            <form action="{{ url('admin/store') }}" method="post" class="dropzone" id="myAwesomeDropzone"
                data-plugin="dropzone" data-previews-container="#file-previews"
                data-upload-preview-template="#uploadPreviewTemplate" enctype="multipart/form-data"
                >
                @csrf 
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


                <select name="event_id" class="form-control mb-3" required>
                    @foreach($events as $event)
                        <option value="{{ $event->id }}">{{ $event->event_name }}</option>
                    @endforeach
                </select>
                <div class="fallback">
                    <input type="file" name="img[]" multiple/>
                </div>

                <div class="dz-message needsclick">
                    <i class="ti ti-cloud-upload h1 text-muted"></i>
                    <h3>Drop files here or click to upload.</h3>
                    <span class="text-muted fs-13">(This is just a demo dropzone. Selected files are
                        <strong>not</strong> actually uploaded.)</span>
                </div>
                <button class="btn w-100 text-white" style="background-color: #343B4A;">Submit</button>
            </form>

            <!-- Preview -->
            <div class="dropzone-previews mt-3" id="file-previews"></div>
        </div>
        <!-- end card-body -->
    </div>
@endsection