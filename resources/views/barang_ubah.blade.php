<!DOCTYPE html>
<html>
    <body>
        <h1>Form Ubah Data Barang</h1>
        <a href="{{url('barang')}}">Kembali</a>
        <br><br>
        <form method="post" action="{{ url('/barang/ubah_simpan/' . $data->barang_id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <label>Kategori ID</label>
            <input type="number" name="kategori_id" placeholder="Masukkan ID Kategori" value="{{ $data->kategori_id }}">
            <br>
            <label>Barang Kode</label>
            <input type="text" name="barang_kode" placeholder="Masukkan Kode Barang" value="{{ $data->barang_kode }}">
            <br>
            <label>Barang Nama</label>
            <input type="text" name="barang_nama" placeholder="Masukkan Nama Barang" value="{{ $data->barang_nama }}">
            <br>
            <label>Harga Beli</label>
            <input type="number" name="harga_beli" placeholder="Masukkan Harga Beli" value="{{ $data->harga_beli }}">
            <br>
            <label>Harga Jual</label>
            <input type="number" name="harga_jual" placeholder="Masukkan Harga Jual" value="{{ $data->harga_jual }}">
            <br><br>
            <input type="submit" class="btn btn-success" value="Ubah">
        </form>
    </body>
</html>