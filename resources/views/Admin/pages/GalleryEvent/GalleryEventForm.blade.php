 @extends('admin.layout.layout')
 @section('content')
 

<div class="min-h-screen flex justify-center items-center">
   
    <div class="md:col-span-6 col-span-12">
    @if ($errors->any())
    <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
        <ul class="list-disc pl-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{ url('admin/events') }}" method="post" enctype="multipart/form-data"> 
    @csrf
        <div class="card border-0">
            <div class="card-header">
                <h6 class="text-lg font-semibold mb-0">Event Form</h6>
            </div>
            <div class="card-body">
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12">
                        <label class="form-label">Event name:</label>
                        <input type="text" name="event_name" class="form-control">
                    </div>
                 
                    <div class="col-span-12">
                        <label class="form-label">Event Date: </label>
                        <input type="date" class="form-control grow"  name="event_date">
                    </div>


                    <div class="col-span-12">
                            <label class="form-label">Event Image </label>
                            <input class="border border-neutral-200 dark:border-neutral-600 w-full rounded-lg text-lg" name="event_img" id="imgInput" type="file">
                        </div>

                        
                        <div class="col-span-12">
                            <label>Uploaded Image:</label>
                            <img id="imgPreview" class="mt-2" style="width:120px; height:70px; display:none;">
                        </div>
                        
                        <div class="col-span-12">
                        <label class="form-label">Event description:</label>
                        <textarea name="event_description" id="editor" class="form-control">{{old('description') }}</textarea>
                    </div>

                      <div class="col-span-12">
                      <button type="submit" class="btn bg-primary-100 text-primary-600 hover:bg-primary-700 hover:text-white rounded-lg px-6 py-[14px]">Submit</button>
                      </div>
                </div>
            </div>
        </div><!-- card end -->
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