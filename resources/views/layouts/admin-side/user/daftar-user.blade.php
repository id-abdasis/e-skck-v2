@extends('layouts.app')
@section('plugin-css')
<link rel="stylesheet" href="{{ url('/') }}/assets/js/plugins/datatables/dataTables.bootstrap4.css">
@endsection
@section('main-content')
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">Dynamic Table <small>Full pagination</small></h3>
    </div>
    <div class="block-content block-content-full">
        <!-- DataTables functionality is initialized with .js-dataTable-full-pagination class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
        <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
            <thead>
                <tr>
                    <th class="text-center"></th>
                    <th>Tanggal Daftar</th>
                    <th class="d-none d-sm-table-cell">Nama</th>
                    <th class="d-none d-sm-table-cell" style="width: 15%;">Email</th>
                    <th class="text-center" style="width: 15%;">Password</th>
                    <th class="text-center" style="width: 15%;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $key=>$user)
                <tr>
                    <td class="text-center">{{ ($key+1) }}</td>
                    <td class="d-none d-sm-table-cell">{{ substr($user->created_at, 0, -8) }}</td>
                    <td class="font-w600">{{ $user->name }}</td>
                    <td class="d-none d-sm-table-cell">{{ $user->email }}</td>
                    <td class="d-none d-sm-table-cell">{{ 'Diamankan' }}</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                            <i class="fa fa-user"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
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