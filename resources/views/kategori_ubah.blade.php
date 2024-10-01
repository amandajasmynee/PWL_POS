<body>
    <h1>Form Ubah Data Kategori</h1>
    <form method="post" action="{{ url('kategori/ubah_simpan/'.$kategori->kategori_id) }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <label>Kode Kategori</label>
        <input type="text" name="kategori_kode" value="{{ $kategori->kategori_kode }}" placeholder="Masukkan Kode Kategori" required>
        <br>
        <label>Nama Kategori</label>
        <input type="text" name="kategori_nama" value="{{ $kategori->kategori_nama }}" placeholder="Masukkan Nama Kategori" required>
        <br>
        <input type="submit" class="btn btn-success" value="Simpan Perubahan">
    </form>
</body>