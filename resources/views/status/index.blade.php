@extends('layouts.main')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h5 mb-0 text-gray-800">All Status</h1>
<a href="/status/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
class="fas fa-plus-square fa-sm text-white-50"></i> Create New Status</a>
</div>
<!-- Status list view part started -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    
                                        <tr>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            
                                        </tr>
                                    </thead>
                                    @foreach ($statuses as $status)
                                    <tr>
                                            <th>{{$status->name}}</th>
                                            <th><a href="/status/{{$status->id}}/edit" class="btn btn-primary btn-sm">Edit</a></th>
                                            <form action="/status/{{$status->id}}/delete" method="POST">
                                            @csrf
                                            @method('delete')
                                                <th><button class="btn btn-danger btn-sm" value="delete">Delete</button></th>
                                            </form>
                                            
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>  

@endsection