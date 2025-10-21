@extends('admin.layout.layout')
@section('content')


<div class="grid grid-cols-1 lg:grid-cols-12 gap-6"></div>
<div class="col-span-12 lg:col-span-6">
        <div class="card border-0 overflow-hidden">
            <div class="card-header">
            <h6 class="text text-lg   font-semibold mb-0 text-center">Contact List</h6>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table striped-table mb-0">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="!bg-white dark:!bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                                    Phone number</th>
                                <th scope="col"
                                    class="!bg-white dark:!bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                                    Whatsapp number</th>
                                <th scope="col"
                                    class="!bg-white dark:!bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                                    Email </th>
                                <th scope="col"
                                    class="!bg-white dark:!bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                                    Location</th>
                                <th scope="col" colspan="2"
                                    class="!bg-white dark:!bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                                    Action</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $value)
                            <tr class="odd:bg-neutral-100 dark:odd:bg-neutral-600">
                                <td>
                                    <div class="flex items-center">
                                        <div class="grow">     
                                            <span class="text-sm text-secondary-light font-normal">{{ is_array($value->phone) ? implode(', ', $value->phone) : $value->phone }}
                                            </span>
                                        </div>                                      
                                    </div>
                                </td>
                                <td><div class="grow">     
                                            <span class="text-sm text-secondary-light font-normal">{{ is_array($value->whatsapp_number) ? implode(', ', $value->whatsapp_number) : $value->whatsapp_number }}</span>
                                        </div></td>
                                <td><div class="grow">     
                                            <span class="text-sm text-secondary-light font-normal">{{ is_array($value->email) ? implode(', ', $value->email) : $value->email }}</span>
                                        </div></td>
                                <td><div class="grow">     
                                            <span class="text-sm text-secondary-light font-normal">{{ is_array($value->location) ? implode(', ', $value->location) : $value->location }}</span>
                                        </div></td>
                              
                                <td class="text-center">
                                    <span
                                        class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-8 py-1.5 rounded-full font-medium text-sm"><a href="{{ url('admin/destroy/'.$value->id) }}">Delete</a></span>
                                    <span
                                        class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-8 py-1.5 rounded-full font-medium text-sm"><a href="{{ url('admin/edit/'.$value->id) }}">Edit</a></span>
                                        
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