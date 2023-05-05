@extends('home')

@section('css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Crush On The most popular Admin Dashboard template and ui kit">
    <meta name="author" content="PuffinTheme the theme designer">

    <link rel="icon" href="favicon.ico" type="image/x-icon"/>

    <title>SPPD - Tambah Data Pegawai</title>

    <!-- Bootstrap Core and vandor -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />



    <!-- Core css -->
    <link rel="stylesheet" href="assets/css/main.css"/>
    <link rel="stylesheet" href="assets/css/default.css" />
@endsection

@section('page_title')
    Tambah Data Pegawai
@endsection

@section('content')
    <div class="section-body">
        <div class="container-fluid">
          
            <div class="row clearfix">                    
                <div class="col-lg-12">
                    <form class="card">
                        @csrf
                        <div class="card-body">
                            <h3 class="card-title">Tambah Data Pegawai</h3>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="form-label">NIP</label>
                                        <input type="text" class="form-control" placeholder="NIP">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" placeholder="Nama Lengkap">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Jabatan</label>
                                        <input type="email" class="form-control" placeholder="Jabatan">
                                    </div>
                                </div>
                                {{-- <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" placeholder="Company" value="Chet">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" placeholder="Last Name" value="Faker">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control" placeholder="Home Address" value="Melbourne, Australia">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">City</label>
                                        <input type="text" class="form-control" placeholder="City" value="Melbourne">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Postal Code</label>
                                        <input type="number" class="form-control" placeholder="ZIP Code">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="form-label">Country</label>
                                        <select class="form-control custom-select">
                                        <option value="">Germany</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-0">
                                        <label class="form-label">About Me</label>
                                        <textarea rows="5" class="form-control" placeholder="Here can be your description" value="Mike">Oh so, your weak rhyme
                                        You doubt I'll bother, reading into it I'll probably won't, left to my own devicesBut that's the difference in our opinions.</textarea>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="" class="btn btn-primary">Tambah Data</button>
                        </div>
                    </form>
    
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="assets/bundles/lib.vendor.bundle.js"></script>

    <script src="assets/bundles/selectize.bundle.js"></script>

    <script src="assets/js/core.js"></script>
    <script src="assets/js/vendors/selectize.js"></script>
@endsection