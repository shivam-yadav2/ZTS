
@extends('admin.layout.layout')
@section('content')

<div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
<div class="col-span-12 lg:col-span-12">
        <div class="card border-0 overflow-hidden">
            <div class="card-header flex justify-between">
                <h5 class="card-title text-lg mb-0">Core Member</h5>
                <button type="button" class=" ms-3 btn border border-success-600 text-success-300 hover:bg-success-300 hover:text-white rounded-lg px-5 py-[5px] flex items-center gap-2">
           
                <a href="{{ url('admin/coremember/CoreMemberForm') }}">     <i class="fa-solid fa-plus"></i>   </a>
                    </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table striped-table mb-0">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="!bg-white dark:!bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                               Name: </th>
                                <th scope="col"
                                    class="!bg-white dark:!bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                                    Image:</th>
                                <th scope="col"
                                    class="!bg-white dark:!bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                                    Description </th>
                                <th scope="col"
                                    class="!bg-white dark:!bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                                    Action</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($info as $value )
                            <tr class="odd:bg-neutral-100 dark:odd:bg-neutral-600">
                                <td>
                                    <div class="flex items-center">
                                    <div class="grow">
                                            <span class="text-sm text-secondary-light font-normal">{{ $value->name }}</span>
                                        </div>
         
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span>
                                    <img src="{{ asset('assets/uploads/CoreMember/'.$value->img) }}" alt=""
                                    class="shrink-0  rounded-lg me-3" style="width:100px; height: 70px;">
                                    </span>
                                  </td>
                                <td>{{ $value->description }}</td>
                              
                                <td class="text-center">
                                    <span class="mx-1">
                                        <button type="button" class="bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 px-6 py-1.5 rounded-full font-medium text-sm">
                                            <a href="{{ url('admin/coremember/destroy/'.$value->id) }}" onclick="return confirm('Are you sure you want to delete this core member?')">Delete</a>
                                        </button>
                                    </span>
                                    <span class="mx-1">
                                        <button type="button" class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">
                                            <a href="{{ url('admin/coremember/edit/'.$value->id) }}">Edit</a>
                                        </button>
                                    </span>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center py-8 text-neutral-600 dark:text-neutral-400">
                                    No core members found. <a href="{{ url('admin/coremember/CoreMemberForm') }}" class="text-primary-600 hover:underline">Add one now</a>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- card end -->
    </div>
</div>
@endsection