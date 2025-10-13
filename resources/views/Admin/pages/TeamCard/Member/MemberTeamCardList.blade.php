@extends('admin.layout.layout')
@section('content')

<div class="grid grid-cols-12 w-full">
    <div class="col-span-12">
        <div class="card border-0 overflow-hidden w-full">
            <div class="card-header">
                <h6 class="card-title mb-0 text-lg">Member Card List</h6>
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
                        @foreach ($data as $data)
                        <tr>
                            <td class="px-4 py-2 text center">{{ $data->name}}</td>
                            <td class="px-4 py-2 text center">{{ $data->description}}</td>
                            <td class="px-4 py-2 text center">{{ $data->type}}</td>
                            <td class="px-4 py-2 text center">
                                <img src="{{ asset('assets/uploads/teamcard/'.$data->img) }}" alt="" style="width:150px; height: 80px;">
                            </td>
                           
                         
                            <td class="px-4 py-2">
                                <span class="bg-success-100 dark:bg-success-600/25 
                                             text-success-600 dark:text-success-400 
                                             px-4 py-1 rounded-full text-sm"><a href="{{ url('admin/teamcard/destroy/'.$data->id) }}"><i class="fa-solid fa-trash"></i></a></span>
                                <span class="bg-success-100 dark:bg-success-600/25 
                                             text-success-600 dark:text-success-400 
                                             px-4 py-1 rounded-full text-sm"><a href="{{ url('admin/teamcard/edit/'.$data->id) }}"> <i class="fa-solid fa-pen-to-square"></i></a></span>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
