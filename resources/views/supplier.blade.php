<!DOCTYPE html>
<html>
    <head>
        <title>Data Supplier</title>
    </head>
    <body>
        <h1>Data Supplier</h1>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <th>ID Supplier</th>
                <th>Kode Supplier</th>
                <th>Nama Supplier</th>
                <th>Alamat Supplier</th>
                <th>Action</th>
            </tr>
            @foreach ($data as $d)
                <tr>
                    <td>{{ $d->supplier_id }}</td>
                    <td>{{ $d->supplier_kode }}</td>
                    <td>{{ $d->supplier_nama }}</td>
                    <td>{{ $d->supplier_alamat }}</td>
                    <td>
                        <a href="{{ url('/supplier/' . $d->supplier_id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ url('/supplier/ubah/' . $d->supplier_id) }}" class="btn btn-warning btn-sm">Ubah</a>
                        <form class="d-inline-block" method="POST" action="{{ url('/supplier/' . $d->supplier_id) }}">
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