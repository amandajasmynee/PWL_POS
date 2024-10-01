<body>
    <h1>Form Tambah Data Barang</h1>
    <form method="post" action="{{url('barang/tambah_simpan')}}">
        {{ csrf_field()}}
        <label>Kategori ID</label>
        <input type="number" name="kategori_id" placeholder="Masukkan ID Kategori">
        <br>
        <label>Barang Kode</label>
        <input type="text" name="barang_kode" placeholder="Masukkan Kode Barang">
        <br>
        <label>Barang Nama</label>
        <input type="text" name="barang_nama" placeholder="Masukkan Nama Barang">
        <br>
        <label>Harga Beli</label>
        <input type="number" name="harga_beli" placeholder="Masukkan Harga Beli">
        <br>
        <label>Harga Jual</label>
        <input type="number" name="harga_jual" placeholder="Masukkan Harga Jual">
        <br><br>
        <input type="submit" class="btn btn-success" value="Simpan">
    </form>
</body>