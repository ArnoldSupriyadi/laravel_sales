@extends('layouts.app')

@section('title', 'User')

@section('content')
        <div class="col-md-12 my-4">
            <a href="{{ route('user.create') }}" class="btn btn-primary">Add User</a>
        </div>
         @if ($message = Session::get('success'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>  {{ $message }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Users</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Role</th>
                                <th>Action</th>                                             
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Role</th>
                                <th>Action</th>   
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($users as $user) 
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td><span class="badge badge-pill badge-success">Admin</span></td>
                                <td><a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                                    <a href="#" class="btn btn-danger mx-3">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            
                            
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>             
@endsection