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
                            <form action="">
                                <div class="mb-3 row">
                                    <label for="inputAcara" class="col-sm-2 col-form-label">Nama User</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputAcara" placeholder="john">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="inputAcara" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputAcara" placeholder="name@example.com">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="inputAcara" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputAcara" placeholder="password">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="inputAcara" class="col-sm-2 col-form-label">Confirm Password</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputAcara" placeholder="confirm password">
                                    </div>
                                </div>

                                <p>Role</p>
                                <div class="checkbox">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                      </div>
                                </div>

                                <a href="#" class="btn btn-primary mt-4">Save</a>
                            </form>
                        </div>
                    </div>
                    <!-- Content Row -->
@endsection

