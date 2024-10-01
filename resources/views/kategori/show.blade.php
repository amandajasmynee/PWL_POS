@extends('layouts.template')
@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
                <a class="btn btn-sm btn-secondary mt-1" href="{{ url('kategori') }}">Kembali</a>
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Kode Kategori</label>
                <input type="text" class="form-control" value="{{ $kategori->kategori_kode }}" readonly>
            </div>
            <div class="form-group">
                <label>Nama Kategori</label>
                <input type="text" class="form-control" value="{{ $kategori->kategori_nama }}" readonly>
            </div>
        </div>
    </div>
@endsection