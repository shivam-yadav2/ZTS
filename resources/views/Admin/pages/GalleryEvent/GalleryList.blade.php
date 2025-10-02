@extends('admin.layout.layout')
@section('content')
<div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
<div class="col-span-12">
            <div class="card border-0 overflow-hidden">
                <div class="card-header">
                    <h5 class="card-title text-lg mb-0">Event table</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table bordered-table mb-0">
                            <thead>
                                <tr>    
                                    <th scope="col">Event name</th>
                                    <th scope="col">Event description</th>
                                    <th scope="col">Event date</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Action</th>
                             
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($info as  $value)
                                <tr>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="assets/images/users/user1.png" alt="" class="shrink-0 me-3 rounded-lg">
                                            <span class="text-lg text-secondary-light font-semibold grow">{{ $value->event_name}}</span>
                                        </div>
                                    </td>
                                    <td>{{ $value->event_description }}</td>
                                    <td>{{ $value->event_date }}</td>
                                    <td><img src="{{ asset('assets/uploads/events/'.$value->event_img) }}" alt="" style="width:70px; height:70px;"></td>
                                   
                                    <td class="text-center">
                                        <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm"><a href="{{  route('events.edit', $value->id) }}">edit</a></span>
 <!-- Delete -->
 <form action="{{ route('events.destroy', $value->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure to delete this record?')" class="bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 px-6 py-1.5 rounded-full font-medium text-sm">
            Delete
        </button>
    </form>
    <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm"><a href="{{  url('admin/showImg/'. $value->id) }}">View</a></span>
    <span class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm"><a href="{{  url('admin/showForm') }}">Add</a></span>
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