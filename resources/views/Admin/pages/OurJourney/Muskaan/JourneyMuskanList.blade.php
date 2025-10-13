@extends('admin.layout.layout')
@section('content')
               
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        <div class="col-span-12 lg:col-span-12">
            <div class="card border-0 overflow-hidden">
                <div class="card-header">
                    <h5 class="card-title text-lg mb-0"> Our Journey Muskaan List</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table striped-table mb-0">
                            <thead>

                                <tr>
                                    <th scope="col"
                                        class="!bg-white dark:!bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                                        Image:</th>
                                    <th scope="col"
                                        class="!bg-white dark:!bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                                        Description</th>
                                    <th scope="col"
                                        class="!bg-white dark:!bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                                        Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($infomuskan as $value)

                                    <tr class="odd:bg-neutral-100 dark:odd:bg-neutral-600">
                                        <td>
                                            <div class="flex items-center">
                                                <img src="{{ asset('assets/uploads/OurJourney/' . $value->img) }}" alt=""
                                                    class="shrink-0 rounded-lg me-3" style="width:100px;height:70px;">

                                            </div>
                                        </td>
                                        <td>
                                            <div class="">
                                                <span
                                                    class="text-sm text-secondary-light font-normal">{{ $value->description }}</span>
                                            </div>
                                        </td>

                                        <td class="text-center">
                                            <span
                                                class="bg-success-100 dark:bg-primary-600/25 text-success-600 dark:text-success-400 px-8 py-1.5 rounded-full font-medium text-sm">
                                                <a href="{{ url('admin/ourjourney/muskan/destroy/' . $value->id) }}">
                                                    Delete
                                                </a>

                                            </span>
                                            <span
                                                class="bg-success-100 dark:bg-purple-600/25 text-success-600 dark:text-success-400 px-8 py-1.5 rounded-full font-medium text-sm">
                                                <a href="{{ url('admin/ourjourney/muskan/edit/' . $value->id) }}">
                                                    Edit
                                                </a>

                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-4">
                            {{$infomuskan->links()}}
                        </div>
                    </div>
                </div>
            </div><!-- card end -->
        </div>
    </div>
@endsection