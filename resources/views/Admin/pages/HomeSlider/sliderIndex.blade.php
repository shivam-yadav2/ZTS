@extends('admin.layout.layout')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

<div class="col-span-12">
            <div class="card border-0 overflow-hidden">
                <div class="card-header">
                    <h5 class="card-title text-lg mb-0">Home Slider</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table bordered-table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col"> image</th>
                                    <th scope="col">Mobile Image</th>
                                    <th scope="col">Text</th>
                                    <th scope="col">Sub text</th>
                                    <th scope="col">Button text</th>
                                    <th scope="col">Button Url</th>
                                    <th scope="col" class="text-center" colspan="2">Status</th>
                                    <th scope="col" class="text-center" colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as  $value)
                                <tr>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/uploads/homeslider/'.$value->img) }}" alt="" class="shrink-0 me-3 rounded-lg" style="width:120px; height:70px;">
                                    
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/uploads/homeslider/'.$value->mobile_img) }}" alt="" class="shrink-0 me-3 rounded-lg" style="width:120px; height:70px;">
                                       
                                        </div>
                                    </td>
                                    <td>{{ $value->text}}</td>
                                    <td>{{ $value->sub_text}}</td>
                                    <td>{{ $value->btn_text}}</td>
                                    <td>{{ $value->btn_url}}</td>
                                    <td class="text-center">
                                    <td>

                <label class=" switch inline-flex items-center cursor-pointer">
                        <input type="checkbox"  class="sr-only peer toggle-status" data-id="{{ $value->id }}" {{ $value->is_active ? 'checked' : '' }}>
                        <span class="relative w-11 h-6 bg-gray-400 peer-focus:outline-none rounded-full peer dark:bg-gray-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-600"></span>
                        <span class="line-height-1 font-medium ms-3 peer-checked:text-primary-600 text-md text-gray-600 dark:text-gray-300">Switch Inactive</span>
                    </label>
            </td>
                       
            <td>
             <a href=" {{ url('admin/slider/destroy/'.$value->id) }}"> <i class="fa-solid fa-trash "></i></a>
           <a href="{{ url('admin/slider/edit/'.$value->id) }}" class="ms-3"><i class="fa-solid fa-pen-to-square"></i></a>  
            </td>
                                </tr>
                                @endforeach
                               
                              
                            </tbody>
                        </table>

                    </div>
                </div>
            </div><!-- card end -->
        </div>


</div>
@section('script')
<script>
document.querySelectorAll('.toggle-status').forEach(toggle => {
    toggle.addEventListener('change', function() {
        let id = this.dataset.id;
        let label = this.closest('label').querySelector('span:last-child'); // for updating status text
        let csrfToken = '{{ csrf_token() }}';

        fetch(`/admin/slider/toggleStatus/${id}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            }
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                // Update the status text in the table
                label.textContent = data.status == 1 ? "Active" : "Inactive";

                // Show SweetAlert popup
                Swal.fire({
                    icon: data.status == 1 ? 'success' : 'warning',
                    title: data.status == 1 ? 'Activated!' : 'Deactivated!',
                    showConfirmButton: false,
                    timer: 1200
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!'
                });
            }
        })
        .catch(error => console.error('Error:', error));
    });
});
</script>


@endsection
@endsection



