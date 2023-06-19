@extends('layouts.app')

@section('title', 'List Data')

@section('content')
     <!-- Begin Page Content -->
     <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">List Data Dokumen</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Formulir</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Waktu</th>
                                <th>Tempat</th>
                                <th>Riwayat Event</th>
                                <th>Perkiraan Traffic</th>
                                <th>Dibuat Oleh</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Waktu</th>
                                <th>Tempat</th>
                                <th>Riwayat Event</th>
                                <th>Perkiraan Traffic</th>
                                <th>Dibuat Oleh</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td><a href="#" class="btn btn-info mx-2">Download</a></td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection