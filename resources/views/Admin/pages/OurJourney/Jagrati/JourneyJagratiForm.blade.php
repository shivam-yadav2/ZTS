@extends('admin.layout.layout')
@section('content')

<div class="flex justify-center items-center">
    <div class="col-span-12 md:col-span-6 w-full">
        <div class="bg-white dark:bg-neutral-800 shadow-lg rounded-2xl overflow-hidden">
            <!-- Card Header -->
            <div class="border-b border-neutral-200 dark:border-neutral-700 px-6 py-5">
                <h2 class="text-xl font-bold text-neutral-900 dark:text-neutral-100">Upload File & Description</h2>
            </div>


            <!-- Card Body -->
            <div class="p-6">
                <form action="{{ url('admin/ourjourney/store') }}" method="post" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @if ($errors->any())
                    <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error )
                            <li class="text-red-400">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    
                    @endif
                    <!-- File Input -->
                     <input type="hidden" value="Jagrati" name="type">
                    <div>
                        <label class="block text-sm font-medium text-neutral-700 dark:text-white mb-2">Upload File</label>
                        <input type="file" name="img" id="imgInput" 
                            class="block w-full text-sm text-neutral-700 dark:text-white border border-neutral-300 dark:border-neutral-600 rounded-lg cursor-pointer bg-white dark:bg-neutral-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 p-2">
                    </div>


                    <div class="">
                            <label>Uploaded Image:</label>
                            <img id="imgPreview" class="mt-2" style="width:120px; height:70px; display:none;">
                        </div>

                    <!-- Textarea -->
                    <div>
                        <label class="block text-sm font-medium text-neutral-700 dark:text-white mb-2">Description</label>
                        <textarea name="description" rows="4"
                            class="w-full rounded-lg border border-neutral-300 dark:border-neutral-600 bg-white dark:bg-neutral-700 text-neutral-800 dark:text-neutral-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 p-4 resize-none placeholder:text-neutral-400"
                            placeholder="Enter a description..." id="editor">{{ old('description') }}</textarea>
                    </div>

                    <!-- Buttons -->
                    <div class="flex justify-center">
                        <button type="submit"
                            class="bg-warning-600 hover:bg-warning-700 text-white font-semibold rounded-full px-6 py-2 transition-all duration-200 shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-warning-500">
                            Add
                        </button>
                    </div>
                </form>
            </div>
        </div>
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