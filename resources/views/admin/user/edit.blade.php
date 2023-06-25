@extends('layouts.app')

@section('title', 'Create User')

@section('content')
    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">User Edit Page</h1>
                        
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-md-12 my-4">
                            <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3 row">
                                    <label for="inputAcara" class="col-sm-2 col-form-label">Nama User</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" id="inputAcara" placeholder="john" value="{{ $user->name }}">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="inputAcara" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" class="form-control" id="inputAcara" placeholder="name@example.com" value="{{ $user->email }}">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="inputAcara" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="password" class="form-control" id="inputAcara" placeholder="password" value="{{ $hasilpass }}">
                                    </div>
                                </div>

                                {{-- <p>Role</p>
                                <div class="checkbox">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                      </div>
                                </div> --}}

                                <button type="submit" class="btn btn-primary mt-4">Save</button>
                            </form>
                        </div>
                    </div>
                    <!-- Content Row -->
@endsection

