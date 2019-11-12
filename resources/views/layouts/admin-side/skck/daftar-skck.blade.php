@extends('layouts.app')
@section('plugin-css')
<link rel="stylesheet" href="{{ url('/') }}/assets/js/plugins/datatables/dataTables.bootstrap4.css">
@endsection
@section('main-content')
<div class="container-fluid">
    <h5 class="content-heading">
        List Pendaftar SKCK
    </h5>
    <div class="row">
        <div class="col-md-12">
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Daftar Pendaftar SKCK</h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables functionality is initialized with .js-dataTable-full-pagination class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                        <thead>
                            <tr>
                                <th class="text-center"></th>
                                <th>Tanggal Daftar</th>
                                <th class="d-none d-sm-table-cell">Nama</th>
                                <th class="d-none d-sm-table-cell" style="width: 15%;">NIK</th>
                                <th class="text-center" style="width: 15%;">Keperluan</th>
                                <th class="text-center" style="width: 15%;">Kode Unik</th>
                                <th class="text-center" style="width: 15%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($semua_skck as $key=>$skck)
                            <tr>
                                <td class="text-center">{{ ($key+1) }}</td>
                                <td class="d-none d-sm-table-cell">{{ substr($skck->created_at, 0, -8) }}</td>
                                <td class="font-w600">{{ $skck->nama_lengkap_pendaftar }}</td>
                                <td class="d-none d-sm-table-cell">{{ $skck->nomor_identitas_pendaftar }}</td>
                                <td class="d-none d-sm-table-cell">{{ $skck->satwil['keperluan'] }}</td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="badge badge-success">{{ $skck->satwil['kode_unik'] }}</span>
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('detail', $skck->id) }}">
                                        <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="tooltip" title="Detail Pendaftar">
                                            <i class="fa fa-user"></i>
                                        </button>
                                    </a>
                                    <a href="{{ route('sunting-pendaftar', $skck->id) }}">
                                        <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="tooltip" title="Sunting Pendaftar">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                    </a>
            
                                    <a href="{{ route('hapus-pendaftar', $skck->id) }}">
                                        <button type="button" id="btn-hapus" class="btn btn-sm btn-alt-danger" data-toggle="tooltip" title="Hapus Pendaftar">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </a>
            
                                    <a target="_blank" href="{{ route('print-pendaftar', $skck->id) }}">
                                        <button type="button" class="btn btn-sm btn-alt-info" data-toggle="tooltip" title="Hapus Pendaftar">
                                            <i class="fa fa-print"></i>
                                        </button>
                                    </a>
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
@endsection

@section('plugin-js')
    <!-- Page JS Plugins -->
    <script src="{{ url('/') }}/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('/') }}/assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>

@endsection

@section('page-js')
     <!-- Page JS Code -->
     <script src="{{ url('/') }}/assets/js/pages/be_tables_datatables.min.js"></script>
@endsection