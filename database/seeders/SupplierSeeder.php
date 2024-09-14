<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['supplier_id' => 1, 'supplier_kode' => 'SUP-FNB01', 'supplier_nama' => 'Fresh Food Supplies', 'supplier_alamat' => 'Jl. Raya Makanan No. 10, Jakarta'],
            ['supplier_id' => 2, 'supplier_kode' => 'SUP-ELC01', 'supplier_nama' => 'ElectroTech Supplies', 'supplier_alamat' => 'Jl. Teknologi No. 45, Bandung'],
            ['supplier_id' => 3, 'supplier_kode' => 'SUP-CLT01', 'supplier_nama' => 'ClothMaster', 'supplier_alamat' => 'Jl. Fashion No. 22, Surabaya'],
        ];
        DB::table('m_supplier')->insert($data);
    }
}
