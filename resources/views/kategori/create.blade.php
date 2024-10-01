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
            <form action="{{ url('kategori') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="kategori_kode">Kode Kategori</label>
                    <input type="text" name="kategori_kode" class="form-control @error('kategori_kode') is-invalid @enderror" id="kategori_kode" value="{{ old('kategori_kode') }}">
                    @error('kategori_kode')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kategori_nama">Nama Kategori</label>
                    <input type="text" name="kategori_nama" class="form-control @error('kategori_nama') is-invalid @enderror" id="kategori_nama" value="{{ old('kategori_nama') }}">
                    @error('kategori_nama')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection