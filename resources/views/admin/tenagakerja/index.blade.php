@extends('layouts.app')

@section('title', 'Tenaga Kerja')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        
        <div class="col-md-12 my-4">
            <a href="{{{ route('tenagakerja.create') }}}" class="btn btn-primary">Add Biaya</a>
        </div>
        
        <div class="col-md-12 mt-5">
            <h1 class="h3 mb-2 text-gray-800 mb-4">Tenaga Kerja</h1>
             <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">List Details</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Biaya</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Nama</th>
                                    <th>Biaya</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>Sewa Tenda</td>
                                    <td>3.000.000</td>
                                    <td><a href="#" class="btn btn-warning">Edit</a><a href="#" class="btn btn-danger mx-3">Delete</a></td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Page Content -->
@endsection