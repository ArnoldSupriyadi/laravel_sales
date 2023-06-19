@extends('layouts.app')

@section('title', 'Create Rincian Biaya')

@section('content')
<div class="col-md-12 my-4">
    <h1 class="h3 mb-2 text-gray-800">Input Rincian Biaya</h1>

    <form action="" class="mt-3">
        <div class="mb-3 row">
            <label for="inputAcara" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputAcara" placeholder="name@example.com">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputRiwayatEvent" class="col-sm-2 col-form-label">Biaya</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="inputRiwayatEvent">
            </div>
        </div>

        <hr class="sidebar-divider">
        
        <button type="submit" class="btn btn-danger mx-2">Cancel</button>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection