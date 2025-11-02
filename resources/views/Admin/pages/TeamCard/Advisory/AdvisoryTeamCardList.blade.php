@extends('admin.layout.layout')
@section('content')

<div class="grid grid-cols-12 w-full">
    <div class="col-span-12">
        <div class="card border-0 overflow-hidden w-full">
            <div class="card-header flex justify-between items-center">
                <h6 class="card-title mb-0 text-lg">Advisory Card List</h6>
                <a href="{{ url('admin/advisory/teamcardForm') }}" class="btn border border-success-600 text-success-300 hover:bg-success-300 hover:text-white rounded-lg px-5 py-[5px] flex items-center gap-2">
                    <i class="fa-solid fa-plus"></i> Add Advisory Member
                </a>
            </div>
            <div class="card-body">
                <table id="selection-table" 
                       class="w-full border border-neutral-200 dark:border-neutral-600 rounded-lg border-separate">
                    <thead>
                        <tr>
                            <th class="text-neutral-800 dark:text-white px-4 py-2">Name</th>
                            <th class="text-neutral-800 dark:text-white px-4 py-2">Description</th>
                            <th class="text-neutral-800 dark:text-white px-4 py-2">Type</th>
                            <th class="text-neutral-800 dark:text-white px-4 py-2">Image</th>
                            <th class="text-neutral-800 dark:text-white px-4 py-2">Action</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($advisory_data as $data)
                        <tr>
                            <td class="px-4 py-2 text-center">{{ $data->name}}</td>
                            <td class="px-4 py-2 text-center">{{ $data->description}}</td>
                            <td class="px-4 py-2 text-center">{{ $data->type}}</td>
                            <td class="px-4 py-2 text-center">
                                <img src="{{ asset('assets/uploads/teamcard/'.$data->img) }}" alt="" style="width:150px; height: 80px;">
                            </td>
                            <td class="px-4 py-2">
                                <span class="mx-1">
                                    <a href="{{ url('admin/advisory/destroy/'.$data->id) }}" onclick="return confirm('Are you sure you want to delete this advisory member?')" class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-red-600 hover:bg-red-700 text-white transition">
                                        <i class="fa-solid fa-trash text-sm"></i>
                                    </a>
                                </span>
                                <span class="mx-1">
                                    <a href="{{ url('admin/advisory/edit/'.$data->id) }}" class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-600 hover:bg-blue-700 text-white transition">
                                        <i class="fa-solid fa-pen-to-square text-sm"></i>
                                    </a>
                                </span>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center py-8 text-neutral-600 dark:text-neutral-400">
                                No advisory members found. <a href="{{ url('admin/advisory/teamcardForm') }}" class="text-primary-600 hover:underline">Add one now</a>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
