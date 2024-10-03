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
                'nama_barang' => 'PlayStation 5 Console Disc Version',
                'harga' => 8500000.00,
                'diskon' => 500000.00,
                'harga_akhir' => 8500000.00 - 500000.00,
                'stok' => 20,
                'kategori_id' => 1,
                'deskripsi' => 'Playstasion Keluaran terbaru',
                'gambar' => 'https://cdn.mos.cms.futurecdn.net/HkdMToxijoHfz4JwUgfh3G-1200-80.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_barang' => 'MacBook Air (M1 Chip)',
                'harga' => 11500000.00,
                'diskon' => 1500000.00,
                'harga_akhir' => 11500000.00 - 1500000.00,
                'stok' => 30,
                'kategori_id' => 1,
                'deskripsi' => 'MacBook Air dengan M1 Chip',
                'gambar' => 'https://reviewed-com-res.cloudinary.com/image/fetch/s--pM3BRbA_--/b_white,c_limit,cs_srgb,f_auto,fl_progressive.strip_profile,g_center,h_668,q_auto,w_1187/https://reviewed-production.s3.amazonaws.com/1607081088000/DSC_0877.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_barang' => 'Iphone 13 Pro 1Tb',
                'harga' => 8500000.00,
                'diskon' => 500000.00,
                'harga_akhir' => 8500000.00 - 500000.00,
                'stok' => 20,
                'kategori_id' => 1,
                'deskripsi' => 'Iphone 13 new',
                'gambar' => 'https://photos5.appleinsider.com/gallery/product_pages/324-hero.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_barang' => 'Nike Air',
                'harga' => 1500000.00,
                'diskon' => 150000.00,
                'harga_akhir' => 1500000.00 - 15000.00, 
                'stok' => 100,
                'kategori_id' => 2,
                'deskripsi' => 'Sepatu keren untuk semua orang',
                'gambar' => 'https://cdn.runrepeat.com/storage/gallery/buying_guide_primary/66/66-best-sneakers-001-15275042-main.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
