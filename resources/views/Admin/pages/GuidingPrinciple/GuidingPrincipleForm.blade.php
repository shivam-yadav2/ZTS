@extends('admin.layout.layout')

@section('content')
<div class="min-h-screen flex justify-center items-center bg-gray-50 dark:bg-neutral-900"> {{-- Full height + centered --}}
    <div class="w-full max-w-2xl"> {{-- Limit max width for good layout --}}

        <!-- Error Messages -->
        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-lg">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('admin/guidingprinciple/store') }}" method="post" enctype="multipart/form-data"
            class="space-y-6">
            @csrf
            <div class="bg-white dark:bg-neutral-800 shadow-lg rounded-2xl overflow-hidden">
                <!-- Card Header -->
                <div class="border-b border-neutral-200 dark:border-neutral-700 px-6 py-4">
                    <h2 class="text-xl font-bold text-neutral-900 dark:text-neutral-100">Add Guiding Principle</h2>
                </div>

                <!-- Card Body -->
                <div class="p-6 grid grid-cols-12 gap-4">
                    <!-- Heading -->
                    <div class="col-span-12">
                        <label class="block text-sm font-medium text-neutral-700 dark:text-white mb-2">Heading</label>
                        <input type="text" name="heading"
                            class="w-full rounded-lg border border-neutral-300 dark:border-neutral-600 bg-white dark:bg-neutral-700 text-neutral-800 dark:text-neutral-200 p-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Enter heading">
                    </div>

                    <!-- Image Upload -->
                    <div class="col-span-12">
                        <label class="block text-sm font-medium text-neutral-700 dark:text-white-300 mb-2">Image</label>
                        <input type="file" name="icon" id="imgInput"
                            class="w-full rounded-lg border border-neutral-300 dark:border-neutral-600 text-neutral-800 dark:text-neutral-200 p-2 cursor-pointer bg-white dark:bg-neutral-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Image Preview -->
                    <div class="col-span-12">
                        <label>Uploaded Image:</label>
                        <img id="imgPreview" class="mt-2 rounded-lg border border-gray-300 dark:border-neutral-600"
                             style="width:120px; height:70px; display:none;">
                    </div>

                    <!-- Description -->

                    <div class="col-span-12">
                    <label class="block text-sm font-medium text-neutral-700 dark:text-white-300 mb-2">Description</label>
                            <textarea class="form-control" rows="4" cols="50" id="editor" name="description" placeholder="Enter a description...">{{ old('description') }}</textarea>
                        </div>

                    <!-- Submit Button -->
                    <div class="col-span-12 flex justify-center">
                        <button type="submit"
                            class="bg-primary-600 text-white hover:bg-primary-700 rounded-full px-6 py-3 font-semibold transition-all duration-200 shadow hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-primary-500">
                            Add
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')
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
@endsection
