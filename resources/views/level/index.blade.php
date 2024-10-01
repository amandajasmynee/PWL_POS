@extends('layouts.template')
@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools">
            <a class="btn btn-sm btn-primary mt-1" href="{{ url('supplier/create') }}">Tambah Supplier</a>
        </div>
    </div>
    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif 
        <div class="row">
            <div class="col-md-12">
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Filter:</label>
                    <div class="col-3">
                        <input type="text" id="supplier_id" class="form-control" placeholder="Masukkan ID Supplier" required>
                        <small class="form-text text-muted">Filter berdasarkan ID Supplier</small>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary" id="filterButton">Terapkan Filter</button>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-bordered table-striped table-hover table-sm" id="supplierTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Supplier</th>
                    <th>Nama Supplier</th>
                    <th>Alamat Supplier</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        var supplierTable = $('#supplierTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ url("supplier/list") }}',
                type: 'POST',
                data: function(d) {
                    d.supplier_id = $('#supplier_id').val(); // Mengambil input filter
                }
            },
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'supplier_kode', name: 'supplier_kode' },
                { data: 'supplier_nama', name: 'supplier_nama' },
                { data: 'supplier_alamat', name: 'supplier_alamat' },
                { data: 'aksi', name: 'aksi', orderable: false, searchable: false }
            ]
        });
        // Event listener untuk filter
        $('#filterButton').click(function() {
            supplierTable.ajax.reload(); // Reload data dengan filter
        });
    });
</script>
@endpush