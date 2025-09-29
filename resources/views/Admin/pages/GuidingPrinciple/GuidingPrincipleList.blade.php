@extends('admin.layout.layout')
@section('content')

<div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
<div class="col-span-12 lg:col-span-12">
        <div class="card border-0 overflow-hidden">
            <div class="card-header">
                <h5 class="card-title text-lg mb-0">Guiding Principle</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table border-primary-600 mb-0">
                        <thead>
                            <tr>
                                
                                <th scope="col" class="border-r border-b border-primary-600 last:border-r-0">Icon
                                    </th>
                                <th scope="col" class="border-r border-b border-primary-600 last:border-r-0">Heading</th>
                                <th scope="col" class="border-r border-b border-primary-600 last:border-r-0">Description</th>
                                <th scope="col" class="border-r border-b border-primary-600 last:border-r-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($info as $value )
                            <tr>
                               
                                <td class="border-r border-b !border-primary-600 last:border-r-0"><img src="{{ asset('assets/uploads/GuidingPrinciple/'.$value->icon) }}" alt="" style="width:50px; height:50px;"></td>
                                <td class="border-r border-b !border-primary-600 last:border-r-0">{{$value->heading}}</td>
                                <td class="border-r border-b !border-primary-600 last:border-r-0">
                                    <span
                                        class="bg-warning-100 dark:bg-warning-600/25 text-warning-600 dark:text-warning-400 px-8 py-1.5 rounded-full font-medium text-sm">{{$value->description}}</span>
                                </td>
                                <td class="border-r border-b !border-primary-600 last:border-r-0">
                                  <span>
                                    <a href="{{ url('admin/guidingprinciple/destroy/'.$value->id) }}"><i class="fa-solid fa-trash"></i> </a>
                                    <a href="{{ url('admin/guidingprinciple/edit/'.$value->id) }}" class="ms-2"><i class="fa-solid fa-pen"></i> </a>
                                  </span>

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