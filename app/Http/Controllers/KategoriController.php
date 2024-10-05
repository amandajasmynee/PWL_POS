<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class KategoriController extends Controller
{
    public function index() {
        $breadcrumb = (object)[
            'title' => 'Daftar Kategori Barang',
            'list' => ['Home', 'Kategori']
        ];
        $page = (object)[
            'title' => 'Daftar kategori barang yang terdaftar dalam sistem'
        ];
        $activeMenu = 'kategori';
        $kategori = KategoriModel::all();
        return view('kategori.index', [
            'breadcrumb' => $breadcrumb,
            'page' => $page,
            'activeMenu' => $activeMenu,
            'kategori' => $kategori
        ]);
    }
    // Method untuk menampilkan daftar kategori dalam bentuk DataTables
    public function list(Request $request)
    {
        $kategori = KategoriModel::select('kategori_id', 'kategori_kode', 'kategori_nama');
        
        if ($request->kategori_kode) {
            $kategori->where('kategori_kode', $request->kategori_kode);
        }
        return DataTables::of($kategori)
            ->addIndexColumn() // menambahkan kolom index / no urut
            ->addColumn('aksi', function ($kategori) { // menambahkan kolom aksi
                // $btn = '<a href="' . url('/kategori/' . $kategori->kategori_id) . '" class="btn btn-info btn-sm">Detail</a> ';
                // $btn .= '<a href="' . url('/kategori/' . $kategori->kategori_id . '/edit') . '" class="btn btn-warning btn-sm">Edit</a> ';
                // $btn .= '<form class="d-inline-block" method="POST" action="' . url('/kategori/' . $kategori->kategori_id) . '">'
                //     . csrf_field() . method_field('DELETE') .
                //     '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakin menghapus data ini?\');">Hapus</button></form>';
                $btn = '<button onclick="modalAction(\'' . url('/kategori/' . $kategori->kategori_id . '/show_ajax') . '\')" class="btn btn-info btn-sm">Detail</button> ';
                $btn .= '<button onclick="modalAction(\'' . url('/kategori/' . $kategori->kategori_id . '/edit_ajax') . '\')" class="btn btn-warning btn-sm">Edit</button> ';
                $btn .= '<button onclick="modalAction(\'' . url('/kategori/' . $kategori->kategori_id . '/delete_ajax') . '\')" class="btn btn-danger btn-sm">Hapus</button> ';
                return $btn;
            })
            ->rawColumns(['aksi']) // memberitahu bahwa kolom aksi adalah HTML
            ->make(true);
    }
    // Method untuk menampilkan form tambah kategori
    public function create()
    {
        $breadcrumb = (object)[
            'title' => 'Tambah kategori barang',
            'list' => ['Home', 'kategori', 'tambah']
        ];
        $page = (object)[
            'title' => 'Tambah kategori barang baru'
        ];
        $activeMenu = 'kategori';
        $kategori = kategorimodel::all();
        return view('kategori.create', [
            'breadcrumb' => $breadcrumb,
            'page' => $page,
            'activeMenu' => $activeMenu,
            'kategori' => $kategori
        ]);
    }
    // Method untuk menyimpan data kategori baru
    public function store(Request $request)
    {
        $request->validate([
            'kategori_kode' => 'required|string|min:3|unique:m_kategori,kategori_kode',
            'kategori_nama' => 'required|string|max:100'
        ]);
        kategorimodel::create([
            'kategori_kode' => $request->kategori_kode,
            'kategori_nama' => $request->kategori_nama
        ]);
        return redirect('/kategori')->with('success', 'Data kategori berhasil disimpan');
    }
    // Method untuk menampilkan detail kategori
    public function show(string $kategori_id)
    {
        $kategori = kategorimodel::find($kategori_id);
        
        $breadcrumb = (object)[
            'title' => 'Detail Kategori',
            'list' => ['Home', 'kategori', 'detail']
        ];
        $page = (object)[
            'title' => 'Detail kategori'
        ];
        $activeMenu = 'kategori';
        return view('kategori.show', [
            'breadcrumb' => $breadcrumb,
            'page' => $page,
            'activeMenu' => $activeMenu,
            'kategori' => $kategori
        ]);
    }
    // Method untuk menampilkan form edit kategori
    public function edit(string $kategori_id)
    {
        $kategori = kategorimodel::find($kategori_id);
        
        $breadcrumb = (object)[
            'title' => 'Edit kategori',
            'list' => ['Home', 'kategori', 'edit']
        ];
        $page = (object)[
            'title' => 'Edit kategori'
        ];
        $activeMenu = 'kategori';
        return view('kategori.edit', [
            'breadcrumb' => $breadcrumb,
            'page' => $page,
            'activeMenu' => $activeMenu,
            'kategori' => $kategori
        ]);
    }
    // Method untuk memperbarui data kategori
    public function update(Request $request, string $kategori_id)
{
    $request->validate([
        'kategori_kode' => 'required|string|min:3|unique:m_kategori,kategori_kode,' . $kategori_id . ',kategori_id', // Menambahkan kategori_id ke aturan unique
        'kategori_nama' => 'required|string|max:100'
    ]);
    $kategori = KategoriModel::find($kategori_id); // Pastikan model menggunakan KategoriModel
    if (!$kategori) {
        return redirect('/kategori')->with('error', 'Data kategori tidak ditemukan');
    }
    $kategori->update([
        'kategori_kode' => $request->kategori_kode,
        'kategori_nama' => $request->kategori_nama
    ]);
    return redirect('/kategori')->with('success', 'Data kategori berhasil diperbarui');
}
    // Method untuk menghapus data kategori
    public function destroy(string $kategori_id)
    {
        $check = kategorimodel::find($kategori_id);
        
        if (!$check) {
            return redirect('/kategori')->with('error', 'Data kategori tidak ditemukan');
        }
        try {
            kategorimodel::destroy($kategori_id);
            return redirect('/kategori')->with('success', 'Data kategori berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/kategori')->with('error', 'Data kategori gagal dihapus karena masih terdapat data lain yang terkait');
        }
    }

    // AJAX
    public function create_ajax()
    {
        $kategori = KategoriModel::select('kategori_id', 'kategori_nama')->get();
        return view('kategori.create_ajax')->with('kategori', $kategori);
    }

    public function store_ajax(Request $request)
    {
        // cek apakah request berupa ajax
        if ($request->ajax() || $request->wantsJson()) {
            $rules = [
                'kategori_kode' => 'required|string|min:3|unique:m_kategori,kategori_kode',
                'kategori_nama' => 'required|string|max:100'
            ];
            // use Illuminate\Support\Facades\Validation;
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json([
                    'status' => false, // response status, false: error/gagal, true: berhasil
                    'message' => 'Validasi Gagal',
                    'msgField' => $validator->errors(), // pesan error validasi
                ]);
            }
            KategoriModel::create($request->all());
            return response()->json([
                'status' => true,
                'message' => 'Data user berhasil disimpan'
            ]);
        }
        redirect('/');
    }

    public function show_ajax(string $id) {
        $kategori = KategoriModel::find($id);
        return view('kategori.show_ajax', ['kategori' => $kategori]);
    }

    public function edit_ajax(string $id)
    {
        $kategori = KategoriModel::find($id);
        return view('kategori.edit_ajax', ['kategori' => $kategori]);
    }

    public function update_ajax(Request $request, $id)
    {
        //cek apakah request dari ajax
        if ($request->ajax() || $request->wantsJson()) {
            $rules = [
            'kategori_kode' => 'required|string|min:3|unique:m_kategori,kategori_kode,' . $id . ',kategori_id',
            'kategori_nama' => 'required|string|max:100'
            ];
            // use Illuminate\Support\Facades\Validation;
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json([
                    'status' => false, // response status, false: error/gagal, true: berhasil
                    'message' => 'Validasi Gagal',
                    'msgField' => $validator->errors(), // pesan error validasi
                ]);
            }
            $check = KategoriModel::find($id);
            if ($check) {
                $check->update($request->all());
                return response()->json([
                    'status' => true,
                    'message' => 'Data berhasil diupdate'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Data tidak ditemukan'
                ]);
            }
        }
        return redirect('/');
    }

        public function confirm_ajax(string $id) {
            $kategori = KategoriModel::find($id);
            return view('kategori.confirm_ajax', ['kategori' => $kategori]);
        }
    
        // Menghapus data kategori dengan AJAX
        public function delete_ajax(Request $request, $id) {
            //cek apakah request dari ajax
            if($request->ajax() || $request->wantsJson()) {
                $kategori = KategoriModel::find($id);
                if($kategori) {
                    $kategori->delete();
                    return response()->json([
                        'status' => true,
                        'message' => 'Data berhasil dihapus'
                    ]);
                } else {
                    return response()->json([
                        'status' => false,
                        'message' => 'Data tidak ditemukan'
                    ]);
                }
            }
            return redirect('/');
        }
}
