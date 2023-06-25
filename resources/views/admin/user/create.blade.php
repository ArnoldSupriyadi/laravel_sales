@extends('layouts.app')

@section('title', 'Create User')

@section('content')
    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">User Page</h1>
                        
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-md-12 my-4">
                            <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 row">
                                    <label for="inputAcara" class="col-sm-2 col-form-label">Nama User</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="name" name="name" class="form-control"  placeholder="john" required value="{{ old('name') }}">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="inputAcara" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" id="email" name="email" class="form-control"  placeholder="name@example.com" required value="{{ old('email') }}">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="inputAcara" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" id="password" name="password" class="form-control"  placeholder="password" required value="{{ old('password') }}">
                                    </div>
                                </div>

                                {{-- <div class="mb-3 row">
                                    <label for="inputAcara" class="col-sm-2 col-form-label">Confirm Password</label>
                                    <div class="col-sm-10">
                                        <input type="text"  id="inputAcara" class="form-control" placeholder="confirm password">
                                    </div>
                                </div> --}}

                                <p>Role</p>
                                <div class="checkbox">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                      </div>
                                </div>

                                <button type="submit" class="btn btn-primary mt-4">Save</button>
                            </form>
                        </div>
                    </div>
                    <!-- Content Row -->
@endsection

