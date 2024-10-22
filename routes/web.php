<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

Route::pattern('id', '[0-9]+'); // artinya ketika ada parameter {id}, maka harus berupa angka
Route::get('landing', [LandingPageController::class, 'index'])->name('landing');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'postlogin']);
Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'postregister']);
Route::get('logout',[AuthController::class,'logout'])->middleware('auth');

Route::middleware(['auth'])->group(function(){
    Route::get('/',[WelcomeController::class,'index']);

    Route::group(['prefix' => 'profile', 'middleware'=>'authorize:ADM,MNG,STF,CST'], function(){
        Route::get('/', [ProfileController::class, 'index']);
        Route::get('/{id}/edit_ajax', [ProfileController::class, 'edit_ajax']);
        Route::put('/{id}/update_ajax', [ProfileController::class, 'update_ajax']);
        Route::get('/{id}/edit_foto', [ProfileController::class, 'edit_foto']);
        Route::put('/{id}/update_foto', [ProfileController::class, 'update_foto']);
    });

    // artinya semua route di dalam group ini harus punya role ADM (Administrator) dan MNG (Manager)
    Route::group(['prefix' => 'user', 'middleware'=>'authorize:ADM,MNG'], function(){     // artinya semua route di dalam group ini harus login dulu
        Route::get('/', [UserController::class, 'index']);                  // menampilkan halaman awal user
        Route::post('/list', [UserController::class, 'list']);                // menampilkan data user dalam bentuk json untuk datatables
        Route::get('/create', [UserController::class, 'create']);       // menampilkan halaman form tambah user
        Route::post('/', [UserController::class, 'store']);                 // menyimpan data user baru
        Route::get('/create_ajax', [UserController::class, 'create_ajax']);      // menampilkan halaman form tambah user Ajax
        Route::post('/ajax', [UserController::class, 'store_ajax']);                // menampilkan data user baru Ajax
        Route::get('/{id}', [UserController::class, 'show']);             // menampilkan detail user
        Route::get('/{id}/show_ajax', [UserController::class, 'show_ajax']);
        Route::get('/{id}/edit', [UserController::class, 'edit']);       // menampilkan halaman form edit user
        Route::put('/{id}', [UserController::class, 'update']);         // menyimpan perubahan data user
        Route::get('/{id}/edit_ajax', [UserController::class, 'edit_ajax']);        // menampilkan halaman form edit user Ajax
        Route::put('/{id}/update_ajax', [UserController::class, 'update_ajax']);         // menyimpan perubahan data user Ajax
        Route::get('/import', [UserController::class, 'import']); 
        Route::post('/import_ajax', [UserController::class, 'import_ajax']);
        Route::get('/export_excel', [UserController::class, 'export_excel']);
        Route::get('/export_pdf', [UserController::class, 'export_pdf']);
        Route::get('/{id}/delete_ajax', [UserController::class, 'confirm_ajax']);         // untuk tampilkan form confirm delete user Ajax
        Route::delete('/{id}/delete_ajax', [UserController::class, 'delete_ajax']);      // untuk hapus data user Ajax
        Route::delete('/{id}', [UserController::class, 'destroy']);      // menghapus data user
    });

    // artinya semua route di dalam group ini harus punya role ADM (Administrator)
    Route::middleware(['authorize:ADM'])->group(function () {
        Route::group(['prefix' => 'level'], function(){
            Route::get('/', [LevelController::class, 'index']); 
            Route::post('/list', [LevelController::class, 'list']); 
            Route::get('/create', [LevelController::class, 'create']); 
            Route::post('/', [LevelController::class, 'store']); 
            Route::get('/create_ajax', [LevelController::class, 'create_ajax']);
            Route::post('/ajax', [LevelController::class, 'store_ajax']);
            Route::get('/{id}', [LevelController::class, 'show']);
            Route::get('/{id}/show_ajax', [LevelController::class, 'show_ajax']);
            Route::get('/{id}/edit', [LevelController::class, 'edit']);
            Route::put('{id}', [LevelController::class, 'update']);
            Route::get('/{id}/edit_ajax', [LevelController::class, 'edit_ajax']);
            Route::put('/{id}/update_ajax', [LevelController::class, 'update_ajax']);
            Route::get('/import', [LevelController::class, 'import']); 
            Route::post('/import_ajax', [LevelController::class, 'import_ajax']);
            Route::get('/export_excel', [LevelController::class, 'export_excel']);
            Route::get('/export_pdf', [LevelController::class, 'export_pdf']);
            Route::get('/{id}/delete_ajax', [LevelController::class, 'confirm_ajax']);
            Route::delete('/{id}/delete_ajax', [LevelController::class, 'delete_ajax']);
            Route::delete('{id}', [LevelController::class, 'destroy']);
        });
    });

    // artinya semua route di dalam group ini harus punya role ADM (Administrator) dan MNG (Manager)
    Route::group(['prefix' => 'kategori', 'middleware'=>'authorize:ADM,MNG'], function(){
        Route::get('/', [KategoriController::class, 'index']);
        Route::post('/list', [KategoriController::class, 'list']);
        Route::get('/create', [KategoriController::class, 'create']);
        Route::post('/', [KategoriController::class, 'store']);
        Route::get('/create_ajax', [KategoriController::class, 'create_ajax']);
        Route::post('/ajax', [KategoriController::class, 'store_ajax']);
        Route::get('/{id}', [KategoriController::class, 'show']);
        Route::get('/{id}/show_ajax', [KategoriController::class, 'show_ajax']);
        Route::get('/{id}/edit', [KategoriController::class, 'edit']);
        Route::put('{id}', [KategoriController::class, 'update']);
        Route::get('/{id}/edit_ajax', [KategoriController::class, 'edit_ajax']);
        Route::put('/{id}/update_ajax', [KategoriController::class, 'update_ajax']);
        Route::get('/import', [KategoriController::class, 'import']); 
        Route::post('/import_ajax', [KategoriController::class, 'import_ajax']);
        Route::get('/export_excel', [KategoriController::class, 'export_excel']);
        Route::get('/export_pdf', [KategoriController::class, 'export_pdf']);
        Route::get('/{id}/delete_ajax', [KategoriController::class, 'confirm_ajax']);
        Route::delete('/{id}/delete_ajax', [KategoriController::class, 'delete_ajax']);
        Route::delete('{id}', [KategoriController::class, 'destroy']);
    });

    // artinya semua route di dalam group ini harus punya role ADM (Administrator) dan MNG (Manager)
    Route::group(['prefix' => 'supplier', 'middleware'=>'authorize:ADM,MNG'], function(){
        Route::get('/', [SupplierController::class, 'index']);
        Route::post('/list', [SupplierController::class, 'list']);
        Route::get('/create', [SupplierController::class, 'create']);
        Route::post('/', [SupplierController::class, 'store']);
        Route::get('/create_ajax', [SupplierController::class, 'create_ajax']);
        Route::post('/ajax', [SupplierController::class, 'store_ajax']);
        Route::get('/{id}', [SupplierController::class, 'show']); 
        Route::get('/{id}/show_ajax', [SupplierController::class, 'show_ajax']);
        Route::get('/{id}/edit', [SupplierController::class, 'edit']);
        Route::put('{id}', [SupplierController::class, 'update']);
        Route::get('/{id}/edit_ajax', [SupplierController::class, 'edit_ajax']);
        Route::put('/{id}/update_ajax', [SupplierController::class, 'update_ajax']);
        Route::get('/import', [SupplierController::class, 'import']); 
        Route::post('/import_ajax', [SupplierController::class, 'import_ajax']);
        Route::get('/export_excel', [SupplierController::class, 'export_excel']);
        Route::get('/export_pdf', [SupplierController::class, 'export_pdf']);
        Route::get('/{id}/delete_ajax', [SupplierController::class, 'confirm_ajax']);
        Route::delete('/{id}/delete_ajax', [SupplierController::class, 'delete_ajax']);
        Route::delete('{id}', [SupplierController::class, 'destroy']);
    });

    // artinya semua route di dalam group ini harus punya role ADM (Administrator) dan MNG (Manager)
    Route::group(['prefix' => 'barang', 'middleware'=>'authorize:ADM,MNG'], function(){
        Route::get('/', [BarangController::class, 'index']);
        Route::post('/list', [BarangController::class, 'list']);
        Route::get('/create', [BarangController::class, 'create']); 
        Route::post('/', [BarangController::class, 'store']); 
        Route::get('/create_ajax', [BarangController::class, 'create_ajax']);
        Route::post('/ajax', [BarangController::class, 'store_ajax']);
        Route::get('/{id}', [BarangController::class, 'show']);
        Route::get('/{id}/show_ajax', [BarangController::class, 'show_ajax']);
        Route::get('/{id}/edit', [BarangController::class, 'edit']);
        Route::put('{id}', [BarangController::class, 'update']);
        Route::get('/{id}/edit_ajax', [BarangController::class, 'edit_ajax']);
        Route::put('/{id}/update_ajax', [BarangController::class, 'update_ajax']);
        Route::get('/import', [BarangController::class, 'import']); 
        Route::post('/import_ajax', [BarangController::class, 'import_ajax']);
        Route::get('/export_excel', [BarangController::class, 'export_excel']);
        Route::get('/export_pdf', [BarangController::class, 'export_pdf']);
        Route::get('/{id}/delete_ajax', [BarangController::class, 'confirm_ajax']);
        Route::delete('/{id}/delete_ajax', [BarangController::class, 'delete_ajax']);
        Route::delete('{id}', [BarangController::class, 'destroy']);
    });

    // artinya semua route di dalam group ini harus punya role ADM (Administrator), MNG (Manager), dan STF (Staf)
    Route::group(['prefix' => 'stok', 'middleware'=>'authorize:ADM,MNG,STF'], function(){
        Route::get('/', [StokController::class, 'index']);
        Route::post('/list', [StokController::class, 'list']);
        Route::get('/create', [StokController::class, 'create']); 
        Route::post('/', [StokController::class, 'store']); 
        Route::get('/create_ajax', [StokController::class, 'create_ajax']);
        Route::post('/ajax', [StokController::class, 'store_ajax']);
        Route::get('/{id}', [StokController::class, 'show']);
        Route::get('/{id}/show_ajax', [StokController::class, 'show_ajax']);
        Route::get('/{id}/edit', [StokController::class, 'edit']);
        Route::put('{id}', [StokController::class, 'update']);
        Route::get('/{id}/edit_ajax', [StokController::class, 'edit_ajax']);
        Route::put('/{id}/update_ajax', [StokController::class, 'update_ajax']);
        Route::get('/import', [StokController::class, 'import']); 
        Route::post('/import_ajax', [StokController::class, 'import_ajax']);
        Route::get('/export_excel', [StokController::class, 'export_excel']);
        Route::get('/export_pdf', [StokController::class, 'export_pdf']);
        Route::get('/{id}/delete_ajax', [StokController::class, 'confirm_ajax']);
        Route::delete('/{id}/delete_ajax', [StokController::class, 'delete_ajax']);
        Route::delete('{id}', [StokController::class, 'destroy']);
    });

    // artinya semua route di dalam group ini harus punya role ADM (Administrator), MNG (Manager), dan STF (Staf)
    Route::group(['prefix' => 'transaksi', 'middleware'=>'authorize:ADM,MNG,STF'], function(){
        Route::get('/', [TransaksiController::class, 'index']);
        Route::post('/list', [TransaksiController::class, 'list']);
        Route::get('/create', [TransaksiController::class, 'create']); 
        Route::post('/', [TransaksiController::class, 'store']); 
        Route::get('/create_ajax', [TransaksiController::class, 'create_ajax']);
        Route::post('/ajax', [TransaksiController::class, 'store_ajax']);
        Route::get('/{id}', [TransaksiController::class, 'show']);
        Route::get('/{id}/show_ajax', [TransaksiController::class, 'show_ajax']);
        Route::get('/{id}/edit', [TransaksiController::class, 'edit']);
        Route::put('{id}', [TransaksiController::class, 'update']);
        Route::get('/{id}/edit_ajax', [TransaksiController::class, 'edit_ajax']);
        Route::put('/{id}/update_ajax', [TransaksiController::class, 'update_ajax']);
        Route::get('/import', [TransaksiController::class, 'import']); 
        Route::post('/import_ajax', [TransaksiController::class, 'import_ajax']);
        Route::get('/export_excel', [TransaksiController::class, 'export_excel']);
        Route::get('/export_pdf', [TransaksiController::class, 'export_pdf']);
        Route::get('/{id}/delete_ajax', [TransaksiController::class, 'confirm_ajax']);
        Route::delete('/{id}/delete_ajax', [TransaksiController::class, 'delete_ajax']);
        Route::delete('{id}', [TransaksiController::class, 'destroy']);
    });

    // artinya semua route di dalam group ini harus punya role ADM (Administrator), MNG (Manager), dan STF (Staf)
    Route::group(['prefix' => 'detail', 'middleware'=>'authorize:ADM,MNG,STF'], function(){
        Route::get('/', [DetailController::class, 'index']);
        Route::post('/list', [DetailController::class, 'list']);
        Route::get('/create', [DetailController::class, 'create']); 
        Route::post('/', [DetailController::class, 'store']); 
        Route::get('/create_ajax', [DetailController::class, 'create_ajax']);
        Route::post('/ajax', [DetailController::class, 'store_ajax']);
        Route::get('/{id}', [DetailController::class, 'show']);
        Route::get('/{id}/show_ajax', [DetailController::class, 'show_ajax']);
        Route::get('/{id}/edit', [DetailController::class, 'edit']);
        Route::put('{id}', [DetailController::class, 'update']);
        Route::get('/{id}/edit_ajax', [DetailController::class, 'edit_ajax']);
        Route::put('/{id}/update_ajax', [DetailController::class, 'update_ajax']);
        Route::get('/import', [DetailController::class, 'import']); 
        Route::post('/import_ajax', [DetailController::class, 'import_ajax']);
        Route::get('/export_excel', [DetailController::class, 'export_excel']);
        Route::get('/export_pdf', [DetailController::class, 'export_pdf']);
        Route::get('/{id}/delete_ajax', [DetailController::class, 'confirm_ajax']);
        Route::delete('/{id}/delete_ajax', [DetailController::class, 'delete_ajax']);
        Route::delete('{id}', [DetailController::class, 'destroy']);
    });
});