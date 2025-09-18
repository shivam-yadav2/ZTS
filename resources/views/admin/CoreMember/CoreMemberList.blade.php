@extends('master.layout')
    @section('content')

        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header border-bottom border-dashed d-flex align-items-center">
                            <h4 class="header-title">Enquiry List</h4>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive-sm">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($info as $value)
                                            <tr>
                                              
                                                <td>{{ $value->name}}</td>
                                                <td><img src="{{ asset('assets/uploads/CoreMember/'.$value->img) }}" alt="" style="width:40px; height:50px;"></td>
                                                <td>{{ $value->description}}</td>
                                            
    
                                                <td>
                                                   
                                                        <button type="submit" style="border:none;background:none;cursor:pointer;">
                                                            <a href="{{ url('admin/coremember/destroy/'.$value->id) }}"><i class="fa-solid fa-trash text-danger"></i></a>
                                                        </button>
                                               

                                                    <a href="{{ url('admin/coremember/edit/' . $value->id) }}" class="ms-2"> <i
                                                            class="fa-solid fa-pen-to-square text-success"></i></a>
                                                  
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div> <!-- end table-responsive-->
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->


            </div>
        </div>
    @endsection