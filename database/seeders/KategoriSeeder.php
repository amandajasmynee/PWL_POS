<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_id' => 1, 'kategori_kode' => 'FNB', 'kategori_nama' => 'Food and Beverage'],
            ['kategori_id' => 2, 'kategori_kode' => 'ELC', 'kategori_nama' => 'Electronics'],
            ['kategori_id' => 3, 'kategori_kode' => 'CLT', 'kategori_nama' => 'Clothing'],
            ['kategori_id' => 4, 'kategori_kode' => 'HNB', 'kategori_nama' => 'Health and Beauty'],
            ['kategori_id' => 5, 'kategori_kode' => 'HNK', 'kategori_nama' => 'Home and Kitchen'],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
