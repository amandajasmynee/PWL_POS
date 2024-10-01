<body>
    <h1>Form Tambah Data Level</h1>
    <form method="post" action="{{url('level/tambah_simpan')}}">
        {{ csrf_field()}}
        <label>Level Kode</label>
        <input type="text" name="level_kode" placeholder="Masukkan Level Kode">
        <br>
        <label>Level Nama</label>
        <input type="text" name="level_nama" placeholder="Masukkan Level Nama">
        <br>
        <input type="submit" class="btn btn-success" value="Simpan">
    </form>
</body>