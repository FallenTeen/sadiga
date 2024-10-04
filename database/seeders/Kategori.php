<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Kategori extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_kategori')->insert([
            ['nama_kategori' => 'Elektronik', 'deskripsi' => 'Peralatan elektronik dan gadget', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kategori' => 'Laptop', 'deskripsi' => 'Laptop dan komputer portable', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kategori' => 'Ponsel', 'deskripsi' => 'Smartphone dan ponsel', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kategori' => 'Fashion', 'deskripsi' => 'Pakaian pria dan wanita', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kategori' => 'Kecantikan', 'deskripsi' => 'Produk perawatan dan alat kecantikan', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kategori' => 'Household', 'deskripsi' => 'Peralatan Rumah Tangga', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kategori' => 'Otomotif', 'deskripsi' => 'Aksesoris, sparepart dan alat perawatan kendaraan', 'created_at' => now(), 'updated_at' => now()],
        ]);
        
    }
}
