@extends('admin.layout.layout')
@section('content')

    <div class="grid grid-cols-12 gap-5">
        <div class="col-span-12">
            <div class="card border-0">
                <div class="card-header">
                    <h5 class="text-lg font-semibold mb-0">Our team cards</h5>
                </div>
                <div class="card-body">
                    <form class="grid grid-cols-12 gap-4" action="{{ url('admin/teamcard/store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="coremember" name="type">
                        <!-- Name -->
                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                        </div>

                        <!-- Image -->
                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Image</label>
                            <input type="file" name="img" id="imgInput" class="form-control" required>
                        </div>
                        <div class="col-span-12">
                            <label>Uploaded Image:</label>
                            <img id="imgPreview" class="mt-2" style="width:120px; height:70px; display:none;">
                        </div>


                        <!-- Description -->
                        <div class="md:col-span-12 col-span-12">
                            <label class="form-label">Description</label>
                            <textarea name="msg" class="form-control" rows="4" cols="50"
                                placeholder="Enter a description..." id="editor">{{ old('description') }}</textarea>
                        </div>

                        <!-- Submit -->
                        <div class="col-span-12">
                            <button class="btn btn-primary-600" type="submit">Add</button>
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