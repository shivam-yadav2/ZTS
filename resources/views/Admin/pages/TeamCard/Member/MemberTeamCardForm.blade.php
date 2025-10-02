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
                            <input type="file" name="img" class="form-control" required>
                        </div>



                        <!-- Description -->
                        <div class="md:col-span-12 col-span-12">
                            <label class="form-label">Description</label>
                            <textarea name="msg" class="form-control" rows="4" cols="50"
                                placeholder="Enter a description..."></textarea>
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