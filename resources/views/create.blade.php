@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Add Employee</h3>

    <form action="{{route('employees.store')}}" method="POST">
        @csrf
        @method('POST')

        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Name" required>
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email" required>
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

        </div>
        
        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="phone">Phone</label>
                <input name="phone" type="number" class="form-control" id="phone" placeholder="Phone" required>
                @error('phone')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col-md-6">
                <label for="position">Position</label>
                <input name="position" type="text" class="form-control" id="position" placeholder="Position" required>
                @error('position')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

        </div>

        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="age">Age</label>
                <input name="age" type="number" class="form-control" id="age" placeholder="Age" required>
                @error('age')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col-md-6">
                <label for="salary">Monthly Salary</label>
                <input name="salary" type="number" class="form-control" id="salary" placeholder="Monthly Salary (RS.)" required>
                @error('salary')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

        </div>
        
        <button type="submit" class="btn btn-success">Submit</button>
    </form>

</div>

@endsection

<script>
    $(document).ready(function() {
     
    $('#example').DataTable();
} );
</script>