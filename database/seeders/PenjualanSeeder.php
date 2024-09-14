<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['penjualan_id' => 1, 'user_id' => '3', 'pembeli' => 'Daniel', 'penjualan_kode' => 'TR001', 'penjualan_tanggal' => '2024-08-08'],
            ['penjualan_id' => 2, 'user_id' => '3', 'pembeli' => 'Justin', 'penjualan_kode' => 'TR002', 'penjualan_tanggal' => '2024-08-08'],
            ['penjualan_id' => 3, 'user_id' => '3', 'pembeli' => 'Juno', 'penjualan_kode' => 'TR003', 'penjualan_tanggal' => '2024-08-08'],
            ['penjualan_id' => 4, 'user_id' => '3', 'pembeli' => 'Barack', 'penjualan_kode' => 'TR004', 'penjualan_tanggal' => '2024-08-13'],
            ['penjualan_id' => 5, 'user_id' => '3', 'pembeli' => 'Ethan', 'penjualan_kode' => 'TR005', 'penjualan_tanggal' => '2024-08-13'],
            ['penjualan_id' => 6, 'user_id' => '3', 'pembeli' => 'Lily', 'penjualan_kode' => 'TR006', 'penjualan_tanggal' => '2024-08-17'],
            ['penjualan_id' => 7, 'user_id' => '3', 'pembeli' => 'Taylor', 'penjualan_kode' => 'TR007', 'penjualan_tanggal' => '2024-08-17'],
            ['penjualan_id' => 8, 'user_id' => '3', 'pembeli' => 'Sabrina', 'penjualan_kode' => 'TR008', 'penjualan_tanggal' => '2024-08-17'],
            ['penjualan_id' => 9, 'user_id' => '3', 'pembeli' => 'Niki', 'penjualan_kode' => 'TR009', 'penjualan_tanggal' => '2024-08-19'],
            ['penjualan_id' => 10, 'user_id' => '3', 'pembeli' => 'Shawn', 'penjualan_kode' => 'TR010', 'penjualan_tanggal' => '2024-08-19']
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
