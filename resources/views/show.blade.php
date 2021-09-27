@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
          Employee Details
        </div>
        <div class="card-body">
          <p>Name: {{$employee->name}}</p>
          <p>Email:  {{$employee->email}}</p>
          <p>Phone:  {{$employee->phone}}</p>
          <p>Position:  {{$employee->position}}</p>
          <p>Age:  {{$employee->age}}</p>
          <p>Salary:  {{$employee->salary}}</p>
          <a style="float: right" href="{{route('employees.index')}}" class="btn btn-danger">Back</a>
        </div>
      </div>
</div>

@endsection

<script>
    $(document).ready(function() {
     
    $('#example').DataTable();
} );
</script>