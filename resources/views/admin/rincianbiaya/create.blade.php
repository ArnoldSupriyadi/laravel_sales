@extends('layouts.app')

@section('title', 'Create Rincian Biaya')

@section('content')
<div class="col-md-12 my-4">
    <h1 class="h3 mb-2 text-gray-800">Input Rincian Biaya</h1>

    <form action="{{ route('rincianbiaya.store') }}" method="POST" class="mt-3">
        @csrf
        <div class="mb-3 row">
            <label for="inputAcara" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" id="name" name="name" class="form-control" required value="{{ old('name') }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputRiwayatEvent" class="col-sm-2 col-form-label">Biaya</label>
            <div class="col-sm-10">
                <input type="number" id="biaya" name="biaya" class="form-control" required value="{{ old('biaya') }}">
            </div>
        </div>

        <hr class="sidebar-divider">
        
        <a href="{{ route('rincianbiaya') }}" class="btn btn-danger mx-2">Cancel</a>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection