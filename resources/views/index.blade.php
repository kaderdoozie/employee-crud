@extends('layouts.app')

@section('content')
<div class="">
    @if(session()->has('msg'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
       {{session()->get('msg')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif

    <div class="d-flex justify-content-end m-2">
        <a href="/employees/create" class="btn btn-primary">Add Employee</a>
    </div>

    <table id="example" class="table display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Position</th>
                <th>Age</th>
                <th>Monthly Salary(Rs.)</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employee as $item)

            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->position}}</td>
                <td>{{$item->age}}</td>
                <td>{{$item->salary}}</td>
                <td>
                    <a href="{{url('employees/'.$item->id)}}" class="btn btn-primary">Show</a>
                    <a href="{{url('employees/'.$item->id).'/edit'}}" class="btn btn-success">Edit</a>
                    <form style="display:inline" action="{{route('employees.destroy', $item->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>

            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Monthly Salary(Rs.)</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>

</div>


@endsection

<script>
    $(document).ready(function() {
     
    $('#example').DataTable();
} );
</script>