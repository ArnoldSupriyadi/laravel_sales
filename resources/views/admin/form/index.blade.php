@extends('layouts.app')

{{-- set title --}}
@section('title', 'Form')

@section('content')
<div id="content">
    <!-- Begin Page Content -->
    <div class="col-md-12">
        <h1 class="h3 mb-2 text-gray-800">Formulir Perencanaan Sales Event</h1>
    
        <form action="" class="mt-3">
            <div class="mb-3 row">
                <label for="inputAcara" class="col-sm-2 col-form-label">Nama Acara</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputAcara" placeholder="name@example.com">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputDate" class="col-sm-2 col-form-label">Waktu</label>
                <div class="col-sm-10 d-flex">
                    <input type="date" class="form-control" id="inputDate"> <span style="margin: 5px">-</span> <input type="date" class="form-control" id="inputDate"> 
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputTempat" class="col-sm-2 col-form-label">Tempat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputTempat">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputRiwayatEvent" class="col-sm-2 col-form-label">Riwayat Event</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputRiwayatEvent">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputTraffic" class="col-sm-2 col-form-label">Perkiraan Traffic</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputTraffic">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="inputTraffic" class="col-sm-2 col-form-label">Lampiran</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="inputTraffic">
                </div>
            </div>

            <hr class="sidebar-divider">


                <!-- DataTales Example Rincian Biaya-->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold text-primary">Rincian Biaya</h3>
                </div>

                <div class="card-body">
                    <form action="/post" method="POST">
                    
                            <table>
                                <table class="table" id="tablerb">
                                    <thead>
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Biaya / Unit</th>
                                        <th scope="col">Unit (Satuan)</th>
                                        <th scope="col">Jumlah Kebutuhan</th>
                                        <th scope="col">Total Biaya</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><input type="text" name="inputsrb[0]name" placeholder="Masukan Penjelasan" class="form-control"></td>
                                        <td><input type="number" name="inputsrb[0]biaya" placeholder="Masukan Biaya" class="form-control"></td>
                                        <td><input type="text" name="inputsrb[0]bulan" placeholder="Masukan Bulan / Hari" class="form-control"></td>
                                        <td><input type="number" name="inputsrb[0]jml" placeholder="Masukan Angka" class="form-control"></td>
                                        <td><input class="form-control" type="text" name="inputsrb[0]total_biaya" placeholder="6,105,000" readonly></td>
                                        <td>(POS,Freezer,Chiller,Showcase)</td>
                                        <td><button type="button" class="btn btn-success" name="addrb" id="addrb">Add More</button></td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                        <td colspan="4" class="text-center">Total Operasional Unit</td>
                                        <td>Rp 180</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </table>

                            <!-- <button type="submit" class="btn btn-primary col-md-2">Save</button> -->
                                
                </div>
            </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-0 font-weight-bold text-primary">Tenaga Kerja</h3>
                        </div>
                        <div class="card-body">                                             
                            <table>
                                <table class="table" id="tabletk">
                                    <thead>
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Biaya / Unit</th>
                                        <th scope="col">Unit (Satuan)</th>
                                        <th scope="col">Jumlah Kebutuhan</th>
                                        <th scope="col">Total Biaya</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><input type="text" name="inputstk[0]name" placeholder="Enter Your Description" class="form-control"></td>
                                        <td><input type="number" name="inputsrb[0]biaya" placeholder="Masukan Biaya" class="form-control"></td>
                                        <td><input type="text" name="inputsrb[0]bulan" placeholder="Masukan Bulan / Hari" class="form-control"></td>
                                        <td><input type="number" name="inputsrb[0]jml" placeholder="Masukan Angka" class="form-control"></td>
                                        <td><input class="form-control" type="text" placeholder="6,105,000" readonly></td>
                                        <td>(POS,Freezer,Chiller,Showcase)</td>
                                        <td><button type="button" class="btn btn-success" name="addtk" id="addtk">Add More</button></td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                        <td colspan="4" class="text-center">Total Operasional Unit</td>
                                        <td>Rp 180</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </table>
                        </div>
                    </div>

                    <div class="card-shadow mb-4">
                        <!-- <button type="submit" class="btn btn-primary col-md-2">Save</button> -->
                        
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Sales Per Hari</th>
                                    <th scope="col">Jumlah Hari Event</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">Target sales</th>
                                    <td>253900</td>
                                    <td><input type="number" name="jml_hari_event" id="jml_hari_event" class="form-control"></td>
                                </tr>                             
                                </tbody>
                                <tfoot>
                                    <tr>
                                    <td colspan="2" class="text-center">Total Sales</td>
                                    <td>Rp 51526262</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

            <div class="assign my-5">
                <div class="row text-center">
                    <div class="col-md-4">
                        <p>Dibuat oleh</p>
                        <input class="form-control" type="text" placeholder="Arnold" readonly>
                    </div>
                    <div class="col-md-4">
                        <p>Diperiksa oleh :</p>
                        <select class="custom-select  mb-3">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            </select>
                    </div>
                    <div class="col-md-4">
                        <p>Disetujui oleh :</p>
                        <select class="custom-select  mb-3">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            </select>
                    </div>
                </div>
            </div>
            
            <div class="submit-area text-center">
                <button type="submit" class="btn btn-success mb-5" style="width: 30%;">Submit</button>
            </div>
        </form>

            <p>Catatan:</p>
            <p><span>*</span> estimasi sales berdasarkan data traffic dilampirkan</p>
            <p>1. Event dengan nominal xxx diperiksa oleh Assistant Sales Manager dan disetujui oleh Marketing Sales Manager</p>
            <p>2. Event dengan biaya sewa ≥ RP 7.000.000,- persetujuan hingga Finance Controller</p>
    </div>
    <!-- /.container-fluid -->

</div>
@endsection

@push('after-script')
    <script>
         var i=0 ;
        $('#addrb').click(function(){
            ++i;
            $('#tablerb').append(
                `<tr>
                    <td>
                        <input type="text" name="inputsrb[`+i+`][name]" placeholder="Enter your description" class="form-control">
                    </td>
                    <td><input type="number" name="inputsrb[0]biaya" placeholder="Masukan Biaya" class="form-control"></td>
                    <td><input type="text" name="inputsrb[0]bulan" placeholder="Masukan Bulan / Hari" class="form-control"></td>
                    <td><input type="number" name="inputsrb[0]jml" placeholder="Masukan Angka" class="form-control"></td>
                    <td><input class="form-control" type="text" name="inputsrb[0]total_biaya" placeholder="6,105,000" readonly></td>
                    <td>(POS,Freezer,Chiller,Showcase)</td>
                    <td>
                        <button type="button" class="btn btn-danger remove-table-row">Remove</button>
                    </td>
                 </tr>`
            );
        });

        $('#addtk').click(function(){
            ++i;
            $('#tabletk').append(
                `<tr>
                    <td>
                        <input type="text" name="inputsrb[`+i+`][name]" placeholder="Enter your description" class="form-control">
                    </td>
                    <td><input type="number" name="inputsrb[0]biaya" placeholder="Masukan Biaya" class="form-control"></td>
                    <td><input type="text" name="inputsrb[0]bulan" placeholder="Masukan Bulan / Hari" class="form-control"></td>
                    <td><input type="number" name="inputsrb[0]jml" placeholder="Masukan Angka" class="form-control"></td>
                    <td><input class="form-control" type="text" name="inputsrb[0]total_biaya" placeholder="6,105,000" readonly></td>
                    <td>(POS,Freezer,Chiller,Showcase)</td>
                    <td>
                        <button type="button" class="btn btn-danger remove-table-row">Remove</button>
                    </td>
                 </tr>`
            );
        });

        $(document).on('click', '.remove-table-row', function(){
            $(this).parents('tr').remove();
        })
    </script>
@endpush