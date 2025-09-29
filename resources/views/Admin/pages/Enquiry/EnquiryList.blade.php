@extends('admin.layout.layout')
@section('content')

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        <div class="col-span-12 lg:col-span-12">
            <div class="card border-0 overflow-hidden">
                <div class="card-header flex flex-row">
                    <h5 class="card-title text-lg mb-0">Enquiry List</h5>
                    <button type="button" class=" ms-3 btn border border-primary-600 text-primary-600 hover:bg-primary-600 hover:text-white w-[60px] h-[50px] flex items-center justify-center gap-2">
                <a href="{{ url('admin/enquiry/enquiryForm') }}">    <i class="fa-solid fa-plus"></i>   </a>
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table colored-row-table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" class="!bg-white dark:!bg-neutral-700">Name</th>
                                    <th scope="col" class="!bg-white dark:!bg-neutral-700">Phone</th>
                                    <th scope="col" class="!bg-white dark:!bg-neutral-700">Email</th>
                                    <th scope="col" class="!bg-white dark:!bg-neutral-700">Subject</th>
                                    <th scope="col" class="!bg-white dark:!bg-neutral-700">Message</th>
                                    <th scope="col" class="!bg-white dark:!bg-neutral-700">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($enquiry as $value)

                                    <tr>
                                        <td class="bg-primary-50 dark:bg-primary-600/10">{{ $value->name }}</td>
                                        <td class="bg-primary-50 dark:bg-primary-600/10">
                                            <div class="flex items-center">

                                                <h6 class="text-base mb-0 font-medium grow">{{ $value->mobile }}</h6>
                                            </div>
                                        </td>
                                        <td class="bg-primary-50 dark:bg-primary-600/10">{{ $value->email}}</td>
                                        <td class="bg-primary-50 dark:bg-primary-600/10">{{ $value->subject }}</td>
                                        <td class="bg-primary-50 dark:bg-primary-600/10">{{ $value->msg}}</td>
                                        <td class="bg-primary-50 dark:bg-primary-600/10">
                                            <span
                                                class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-8 py-1.5 rounded-full font-medium text-sm"><a
                                                    href="{{ url('admin/enquiry/destroy/' . $value->id) }}">Delete</a></span>
                                            <span
                                                class="bg-purple-100 dark:bg-purple-600/25 text-success-600 dark:text-success-400 px-8 py-1.5 rounded-full font-medium text-sm"><a
                                                    href="{{ url('admin/enquiry/edit/' . $value->id) }}">Edit</a></span>


                                          

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
@endsection