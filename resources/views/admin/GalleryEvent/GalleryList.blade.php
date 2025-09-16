@extends('master.layout')
@section('style')

@endsection
@section('content')
    <div class="main mt-4" style="margin-left:300px;">
        <table class="table table-striped">
              <tr>
                <th>Id</th>
                <th>Event Name</th>
                <th>Event Description</th>
                <th>Event Date</th>
                <th>Event Image</th>
                <th colspan="2">Action</th>
              </tr>
              @foreach ($info as $value )
              <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->event_name}}</td>
                <td>{{ $value->event_description}}</td>
                <td>{{ $value->event_date}}</td>
                <td><img src="{{ asset('assets/uploads/events/'.$value->event_img) }}" alt="" width="50px;" height="50px;"></td>
                <td class="">
                <form action="{{ url('events/' . $value->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" style="border:none;background:none;cursor:pointer;">
        <i class="fa-solid fa-trash text-danger"></i>
    </button>
</form>

                    <a href="{{ route('events.edit',$value->id) }}" class="ms-2"> <i class="fa-solid fa-pen-to-square text-success"></i></a>
                </td>
              </tr>
              @endforeach
        </table>
    </div>

@endsection