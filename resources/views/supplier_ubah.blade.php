<!DOCTYPE html>
<html>
    <body>
        <h1>Form Ubah Data Supplier</h1>
        <a href="{{url('supplier')}}">Kembali</a>
        <br><br>
        <form method="post" action="{{ url('/supplier/ubah_simpan/' . $data->supplier_id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <label>Kode Supplier</label>
            <input type="text" name="supplier_kode" placeholder="Masukkan Kode Supplier" value="{{ $data->supplier_kode }}">
            <br>
            <label>Nama Supplier</label>
            <input type="text" name="supplier_nama" placeholder="Masukkan Nama Supplier" value="{{ $data->supplier_nama }}">
            <br>
            <label>Alamat Supplier</label>
            <input type="text" name="supplier_alamat" placeholder="Masukkan Alamat Supplier" value="{{ $data->supplier_alamat }}">
            <br><br>
            <input type="submit" class="btn btn-success" value="Ubah">
        </form>
    </body>
</html>