@extends('layouts.app')

@section('title', 'Rincian Biaya')

@section('content')
<div class="col-md-12">


    <div class="col-md-12 my-4">
        <a href="{{{ route('rincianbiaya.create') }}}" class="btn btn-primary">Add Biaya</a>
    </div>
      
</div>

<div class="col-md-12 mt-5">
    <h1 class="h3 mb-2 text-gray-800 mb-4">Rincian Biaya</h1>
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
@endsection