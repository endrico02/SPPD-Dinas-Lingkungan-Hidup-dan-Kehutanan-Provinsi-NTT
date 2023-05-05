@extends('home')

@section('css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Crush On The most popular Admin Dashboard template and ui kit">
    <meta name="author" content="PuffinTheme the theme designer">

    <link rel="icon" href="favicon.ico" type="image/x-icon"/>

    <title>SPPD - Data Pegawai</title>

    <!-- Bootstrap Core and vandor -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />

    <!-- Plugins css -->
    <link rel="stylesheet" href="assets/plugins/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/plugins/datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/plugins/datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">
    <style>
        td.details-control {
        background: url('assets/images/details_open.png') no-repeat center center;
        cursor: pointer;
    }
        tr.shown td.details-control {
            background: url('assets/images/details_close.png') no-repeat center center;
        }
    </style>
    <!-- Core css -->
    <link rel="stylesheet" href="assets/css/main.css"/>
    <link rel="stylesheet" href="assets/css/default.css" />
@endsection

@section('page_title')
    Data Pegawai
@endsection

@section('content')
    <div class="section-body  py-4">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add Row</h3>
                        </div>
                        <div class="card-body">
                            <a href="tambah_data_pegawai" class="btn btn-primary mb-15" type="button">
                                <i class="icon wb-plus" aria-hidden="true"></i> Add row
                            </a>
                            <div class="table-responsive">
                                <table class="table table-hover table-vcenter table-striped" cellspacing="0" id="addrowExample">
                                    <thead>
                                        <tr>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                        <tr class="gradeA">
                                            <td>{{ $item->nip}}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->jabatan }}</td>
                                            <td class="actions">
                                                <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                                data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer" aria-hidden="true"></i></button>
                                                <button class="btn btn-sm btn-icon on-editing button-discard"
                                                data-toggle="tooltip" data-original-title="Discard" hidden><i class="icon-close" aria-hidden="true"></i></button>
                                                <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                                data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil" aria-hidden="true"></i></button>
                                                <button class="btn btn-sm btn-icon on-default button-remove"
                                                data-toggle="tooltip" data-original-title="Remove"><i class="icon-trash" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="assets/bundles/lib.vendor.bundle.js"></script>

    <script src="assets/bundles/dataTables.bundle.js"></script>

    <script src="assets/js/core.js"></script>
    <script src="assets/js/table/datatable.js"></script>
@endsection