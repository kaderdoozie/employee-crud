@extends('layouts.app')

@section('content')

<h1>You are logged in!</h1>
<div class="d-flex h-50 justify-content-center align-items-center">
<a href="/employees" class="btn btn-primary">View Application</a>
</div>

@endsection

<script>
    $(document).ready(function() {
     
    $('#example').DataTable();
} );
</script>