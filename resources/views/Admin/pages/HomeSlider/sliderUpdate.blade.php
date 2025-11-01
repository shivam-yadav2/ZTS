@extends('admin.layout.layout')
@section('content')

    <div class="grid grid-cols-12 gap-5">
        <div class="col-span-12">

            <div class="card border-0">
                <div class="card-header">
                    <h5 class="text-lg font-semibold mb-0">Home Slider</h5>
                </div>
                <div class="card-body">
                    <form class="grid grid-cols-12 gap-4" action="{{ url('admin/slider/update/' . $info->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label"> Image </label>
                            <input class="border border-neutral-200 dark:border-neutral-600 w-full rounded-lg text-lg"
                                name="img" type="file">

                        </div>
                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Current Image </label>
                            <img src="{{ asset('assets/uploads/homeslider/' . $info->img) }}" id="currentImage" alt=""
                                style="width:400px; height:80px;">

                        </div>
                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Mobile Image </label>
                            <input class="border border-neutral-200 dark:border-neutral-600 w-full rounded-lg text-lg"
                                name="m_img" type="file">
                        </div>
                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Current Mobile Image </label>
                            <img src="{{ asset('assets/uploads/homeslider/' . $info->mobile_img) }}" id="currentMobileImage"
                                alt="" style="width:400px; height:80px;">

                        </div>
                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Button text</label>
                            <input type="text" name="btn_text" class="form-control" placeholder="Enter Button text"
                                value="{{ $info->btn_text}}">
                        </div>

                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Text</label>
                            <input type="text" name="text" class="form-control" placeholder="Enter Text" required
                                value="{{ $info->text}}">
                        </div>
                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Sub Text</label>
                            <input type="text" name="sub_text" class="form-control" placeholder="Enter Sub text"
                                value="{{ $info->sub_text}}">
                        </div>
                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Button Url</label>
                            <input type="text" name="btn_url" class="form-control" placeholder="Enter Button Url"
                                value="{{ $info->btn_url}}">
                        </div>


                        <div class="col-span-12">
                            <button class="btn btn-primary-600" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @section('script')
        <script>
            // For main image
            document.querySelector('input[name="img"]').addEventListener('change', function (e) {
                const reader = new FileReader();
                reader.onload = function () {
                    document.querySelector('#currentImage').src = reader.result;
                }
                reader.readAsDataURL(this.files[0]);
            });

            // For mobile image
            document.querySelector('input[name="m_img"]').addEventListener('change', function (e) {
                const reader = new FileReader();
                reader.onload = function () {
                    document.querySelector('#currentMobileImage').src = reader.result;
                }
                reader.readAsDataURL(this.files[0]);
            });
        </script>

    @endsection
@endsection