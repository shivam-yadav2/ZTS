@extends('admin.layout.layout')
@section('content')

    <div class="grid grid-cols-12 gap-5">
        <div class="col-span-12">

            <div class="card border-0">
                <div class="card-header">
                    <h5 class="text-lg font-semibold mb-0">Home Slider</h5>
                </div>
                @if ($errors->any())
                    <div class="mt-4 text-red-700">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    <form class="grid grid-cols-12 gap-4" action="{{ url('admin/slider/store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf



                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label"> Image </label>
                            <input id="imgInput"
                                class="border border-neutral-200 dark:border-neutral-600 w-full rounded-lg text-lg"
                                name="img" type="file">
                        </div>


                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Mobile Image </label>
                            <input id="imgInput2"
                                class="border border-neutral-200 dark:border-neutral-600 w-full rounded-lg text-lg"
                                name="m_img" type="file">
                        </div>

                        <div class="md:col-span-6 col-span-12">
                            <label for="">Current Image:</label>
                            <img id="imgPreview" class="mt-2" style="width:120px; height:70px; display:none;">
                        </div>

                        <div class="md:col-span-6 col-span-12">
                            <label for="">Current Image:</label>
                            <img id="imgPreview2" class="mt-2" style="width:120px; height:70px; display:none;">
                        </div>

                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Button text</label>
                            <input type="text" name="btn_text" class="form-control" placeholder="Enter Button text">
                        </div>

                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Text</label>
                            <input type="text" name="text" class="form-control" placeholder="Enter Text" required>
                        </div>
                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Sub Text</label>
                            <input type="text" name="sub_text" class="form-control" placeholder="Enter Sub text"
                                required>
                        </div>
                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Button Url</label>
                            <input type="text" name="btn_url" class="form-control" placeholder="Enter Button Url">
                        </div>


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
        <script>
            document.getElementById('imgInput').addEventListener('change', function(e) {
                const [file] = this.files;
                if (file) {
                    const preview = document.getElementById('imgPreview');
                    preview.src = URL.createObjectURL(file);
                    preview.style.display = 'block';
                }
            });

            document.getElementById('imgInput2').addEventListener('change', function(e) {
                const [file] = this.files;
                if (file) {
                    const preview = document.getElementById('imgPreview2');
                    preview.src = URL.createObjectURL(file);
                    preview.style.display = 'block';
                }
            });
        </script>
    @endsection
