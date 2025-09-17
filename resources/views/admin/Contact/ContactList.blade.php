    @extends('master.layout')
    @section('content')

        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header border-bottom border-dashed d-flex align-items-center">
                            <h4 class="header-title">Contact List</h4>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive-sm">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Whatsapp Number</th>
                                            <th>Phone Number</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contacts as $value)
                                            <tr>
                                                <td>{{ $value->id}}</td>
                                                <td>{{ is_array($value->whatsapp_number) ? implode(', ', $value->whatsapp_number) : $value->whatsapp_number }}</td>
                                        <td>{{ is_array($value->phone) ? implode(', ', $value->phone) : $value->phone }}</td>
                                        <td>{{ is_array($value->email) ? implode(', ', $value->email) : $value->email }}</td>
                                        <td>{{ is_array($value->location) ? implode(', ', $value->location) : $value->location }}</td>


                                                <td>
                                                   
                                                        <button type="submit" style="border:none;background:none;cursor:pointer;">
                                                            <a href="{{ url('admin/destroy/'.$value->id) }}"><i class="fa-solid fa-trash text-danger"></i></a>
                                                        </button>
                                               

                                                    <a href="{{ url('admin/edit/' . $value->id) }}" class="ms-2"> <i
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