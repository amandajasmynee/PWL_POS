<body>
    <h1>Form Tambah Data Supplier</h1>
    <form method="post" action="{{url('supplier/tambah_simpan')}}">
        {{ csrf_field()}}
        <label>Supplier Kode</label>
        <input type="text" name="supplier_kode" placeholder="Masukkan Kode Supplier">
        <br>
        <label>Supplier Nama</label>
        <input type="text" name="supplier_nama" placeholder="Masukkan Nama Supplier">
        <br>
        <label>Supplier Alamat</label>
        <input type="text" name="supplier_alamat" placeholder="Masukkan Alamat Supplier">
        <br><br>
        <input type="submit" class="btn btn-success" value="Simpan">
    </form>
</body>