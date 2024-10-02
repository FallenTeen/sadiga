<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Barang extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_barang')->insert([
            [
                'nama_barang' => 'Smartphone',
                'harga' => 3000000.00,
                'stok' => 50,
                'kategori_id' => 1, // Elektronik
                'deskripsi' => 'Smartphone dengan spesifikasi terbaru',
                'gambar' => 'smartphone.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_barang' => 'Televisi',
                'harga' => 5000000.00,
                'stok' => 30,
                'kategori_id' => 1, // Elektronik
                'deskripsi' => 'Televisi 40 inch dengan resolusi 4K',
                'gambar' => 'televisi.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_barang' => 'Kaos Polos',
                'harga' => 50000.00,
                'stok' => 200,
                'kategori_id' => 2, // Pakaian
                'deskripsi' => 'Kaos polos berbagai warna',
                'gambar' => 'kaos_polos.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_barang' => 'Jeans',
                'harga' => 150000.00,
                'stok' => 100,
                'kategori_id' => 2, // Pakaian
                'deskripsi' => 'Celana jeans untuk pria',
                'gambar' => 'jeans.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
