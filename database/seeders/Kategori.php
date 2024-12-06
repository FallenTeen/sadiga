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
        // 1 AC
        // 2 Jasa
        // 3 Produk atau aksesoris
        DB::table('tb_kategori')->insert([
            ['nama_kategori' => 'AC', 'deskripsi' => 'Unit pendingin udara', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kategori' => 'Jasa', 'deskripsi' => 'Layanan AC', 'created_at' => now(), 'updated_at' => now()],
            ['nama_kategori' => 'Produk', 'deskripsi' => 'Aksesoris AC', 'created_at' => now(), 'updated_at' => now()],
        ]);


    }
}
