@extends('admin.layout.layout')
@section('style')
<style>
    .text{
        color:#000;
    }
</style>
@endsection

@section('content')
<div class="min-h-screen flex justify-center items-center">  {{-- Full height + centered --}}
    <div class="w-full max-w-2xl"> {{-- Limit max width for good layout --}}
        @if ($errors->any())
        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ url('admin/coremember/store') }}" method="post" enctype="multipart/form-data" class="w-full">
            @csrf
            <div class="card border-0 shadow-lg rounded-xl">
                <div class="card-header  bg-primary-50 p-4 rounded-t-xl">
                    <h6 class="text text-lg   font-semibold mb-0 text-center">Core Member Form</h6>
                </div>

                <div class="card-body p-6">
                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-12">
                            <label class="form-label">Name:</label>
                            <input type="text" name="name" class="form-control w-full rounded-lg border border-gray-300">
                        </div>

                        <div class="col-span-12">
                            <label class="form-label">Image:</label>
                            <input id="imgInput" class="border border-neutral-200 dark:border-neutral-600 w-full rounded-lg text-lg" name="img" type="file">
                        </div>

                        <div class="col-span-12">
                            <label>Uploaded Image:</label>
                            <img id="imgPreview" class="mt-2" style="width:120px; height:70px; display:none;">
                        </div>

                        <div class="col-span-12">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="4" cols="50" id="editor" name="description" placeholder="Enter a description...">{{ old('description') }}</textarea>
                        </div>

                        <div class="col-span-12 text-center mt-4">
                            <button type="submit" class="btn bg-primary-100 text-primary-600 hover:bg-primary-700 hover:text-white rounded-lg px-6 py-[14px]">
                                Add
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
<script>
ClassicEditor
    .create(document.querySelector('#editor'))
    .then(editor => {
        const root = editor.editing.view.document.getRoot();
        const isDark = document.documentElement.classList.contains('dark');
        editor.editing.view.change(writer => {
            writer.setStyle('background-color', isDark ? '#1f2937' : '#f8f9fa', root);
            writer.setStyle('color', isDark ? '#fff' : '#000', root);
            writer.setStyle('min-height', '150px', root);
            writer.setStyle('padding', '10px', root);
        });
    })
    .catch(console.error);
</script>
  <script>
document.getElementById('imgInput').addEventListener('change', function(e){
    const [file] = this.files;
    if(file){
        const preview = document.getElementById('imgPreview');
        preview.src = URL.createObjectURL(file);
        preview.style.display = 'block';
    }
});
  </script>


@endsection
