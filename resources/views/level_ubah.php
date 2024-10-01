<body>
    <h1>Form Ubah Data Level</h1>
    <form method="post" action="{{ url('level/ubah_simpan', $level->level_id) }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <label>Level Kode</label>
        <input type="text" name="level_kode" value="{{ $level->level_kode }}" placeholder="Masukkan Level Kode">
        <br>
        <label>Level Nama</label>
        <input type="text" name="level_nama" value="{{ $level->level_nama }}" placeholder="Masukkan Level Nama">
        <br>
        <input type="submit" class="btn btn-success" value="Simpan Perubahan">
    </form>
</body>