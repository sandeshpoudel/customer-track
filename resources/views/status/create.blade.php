@extends('layouts.main')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h5 mb-0 text-gray-800">Create New Status</h1>
    <a href="/status" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
    <i class="fas fa-backspace fa-sm text-white-50"></i> Go Back</a>
</div>

<form class="user" action="{{ route ('status.store')}}" method="POST">
{{csrf_field()}}
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="text" class="form-control form-control-user" 
                placeholder="Status Name" name="name">
        </div>
    <button type="submit" class="btn btn-primary btn-user">Create Status</button>
    <hr>
    </div>
</form>

@endsection