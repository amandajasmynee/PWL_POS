<!DOCTYPE html>
<html>
    <head>
        <title>Data Barang</title>
    </head>
    <body>
        <h1>Data Barang</h1>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <th>ID Barang</th>
                <th>Kategori ID</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Action</th>
            </tr>
            @foreach ($data as $d)
                <tr>
                    <td>{{ $d->barang_id }}</td>
                    <td>{{ $d->kategori_id }}</td>
                    <td>{{ $d->barang_kode }}</td>
                    <td>{{ $d->barang_nama }}</td>
                    <td>{{ $d->harga_beli }}</td>
                    <td>{{ $d->harga_jual }}</td>
                    <td>
                        <a href="{{ url('/barang/' . $d->barang_id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ url('/barang/ubah/' . $d->barang_id) }}" class="btn btn-warning btn-sm">Ubah</a>
                        <form class="d-inline-block" method="POST" action="{{ url('/barang/' . $d->barang_id) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </body>
</html>