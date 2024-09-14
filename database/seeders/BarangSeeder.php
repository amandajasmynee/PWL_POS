<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => '1', 'barang_kode' => 'FNB001', 'barang_nama' => 'Mineral Water', 'harga_beli' => 3000, 'harga_jual' => 5000],
            ['barang_id' => 2, 'kategori_id' => '1', 'barang_kode' => 'FNB002', 'barang_nama' => 'Bread', 'harga_beli' => 8000, 'harga_jual' => 12000],
            ['barang_id' => 3, 'kategori_id' => '1', 'barang_kode' => 'FNB003', 'barang_nama' => 'Milk', 'harga_beli' => 15000, 'harga_jual' => 20000],
            ['barang_id' => 4, 'kategori_id' => '1', 'barang_kode' => 'FNB004', 'barang_nama' => 'Instant Noodles', 'harga_beli' => 10000, 'harga_jual' => 13000],
            ['barang_id' => 5, 'kategori_id' => '1', 'barang_kode' => 'FNB005', 'barang_nama' => 'Black Coffee', 'harga_beli' => 15000, 'harga_jual' => 20000],
            ['barang_id' => 6, 'kategori_id' => '2', 'barang_kode' => 'ELC001', 'barang_nama' => 'Smartphone 64GB', 'harga_beli' => 2000000, 'harga_jual' => 2500000],
            ['barang_id' => 7, 'kategori_id' => '2', 'barang_kode' => 'ELC002', 'barang_nama' => 'LED TV 32 Inch', 'harga_beli' => 1800000, 'harga_jual' => 2300000],
            ['barang_id' => 8, 'kategori_id' => '2', 'barang_kode' => 'ELC003', 'barang_nama' => 'Laptop Core i5', 'harga_beli' => 6000000, 'harga_jual' => 7500000],
            ['barang_id' => 9, 'kategori_id' => '2', 'barang_kode' => 'ELC004', 'barang_nama' => 'Bluetooth Headset', 'harga_beli' => 200000, 'harga_jual' => 300000],
            ['barang_id' => 10, 'kategori_id' => '2', 'barang_kode' => 'ELC005', 'barang_nama' => 'Camera DSLR 24MP', 'harga_beli' => 4000000, 'harga_jual' => 5000000],
            ['barang_id' => 11, 'kategori_id' => '3', 'barang_kode' => 'CLT001', 'barang_nama' => 'Tee', 'harga_beli' => 25000, 'harga_jual' => 50000],
            ['barang_id' => 12, 'kategori_id' => '3', 'barang_kode' => 'CLT002', 'barang_nama' => 'Hoodie', 'harga_beli' => 80000, 'harga_jual' => 120000],
            ['barang_id' => 13, 'kategori_id' => '3', 'barang_kode' => 'CLT003', 'barang_nama' => 'Jeans', 'harga_beli' => 100000, 'harga_jual' => 150000],
            ['barang_id' => 14, 'kategori_id' => '3', 'barang_kode' => 'CLT004', 'barang_nama' => 'Flanel', 'harga_beli' => 75000, 'harga_jual' => 110000],
            ['barang_id' => 15, 'kategori_id' => '3', 'barang_kode' => 'CLT005', 'barang_nama' => 'Sneakers', 'harga_beli' => 150000, 'harga_jual' => 200000],
        ];
        DB::table('m_barang')->insert($data);
    }
}
