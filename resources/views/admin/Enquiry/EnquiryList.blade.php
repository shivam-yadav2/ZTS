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
                                            <th>Phone number</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Msg</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($enquiry as $value)
                                            <tr>
                                              
                                                <td>{{ $value->name}}</td>
                                                <td>{{ $value->mobile }}</td>
                                                <td>{{ $value->email }}</td>
                                                <td>{{ $value->subject}}</td>
                                                <td>{{ $value->msg}}</td>
    
                                                <td>
                                                   
                                                        <button type="submit" style="border:none;background:none;cursor:pointer;">
                                                            <a href="{{ url('admin/enquiry/destroy/'.$value->id) }}"><i class="fa-solid fa-trash text-danger"></i></a>
                                                        </button>
                                               

                                                    <a href="{{ url('admin/enquiry/edit/' . $value->id) }}" class="ms-2"> <i
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