@extends('master.layout')
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="card">
          <div class="card-header border-bottom border-dashed d-flex align-items-center">
            <h4 class="header-title">Gallery List</h4>
            <button class="btn btn-danger text-white w-50 p-2 ms-4"><a href="{{ route('events.create') }}" class="text-white">Add</a></button>

          </div>
          <div class="card-body">

            <div class="table-responsive-sm">
              <table class="table table-striped mb-0">
                <thead>
                  <tr>
                    <th>Event Name</th>
                    <th>Event Description</th>
                    <th>Event Image</th>
                    <th>Event Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($info as $value)
                    <tr>
                      <td>{{ $value->event_name}}</td>
                      <td>{{ $value->event_description }}</td>

                      <td>
                        <img src="{{asset('assets/uploads/events/' . $value->event_img)}}" alt="table-user"
                          class="me-2 avatar-sm rounded-circle" />

                      </td>
                      <td>{{ $value->event_date}}</td>
                      <td>
                        <form action="{{ url('events/' . $value->id) }}" method="POST" style="display:inline;">
                          @csrf
                          @method('DELETE')
                          <button type="submit" style="border:none;background:none;cursor:pointer;">
                            <i class="fa-solid fa-trash text-danger"></i>
                          </button>
                        </form>

                        <a href="{{ route('events.edit', $value->id) }}" class="ms-2"> <i
                            class="fa-solid fa-pen-to-square text-success"></i></a>
                            <a href="{{ url('admin/showImg/'.$value->id) }}" class="ms-2"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{ url('admin/showForm') }}" class="ms-2"><i class="fa-solid fa-plus"></i></a>
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