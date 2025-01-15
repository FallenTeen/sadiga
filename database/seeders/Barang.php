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
                'merk' => 'Daikin',
                'nama_barang' => 'Daikin AC Inverter 1.5 PK',
                'harga' => 6000000.00,
                'harga_beli' => 5500000.00,  // Added purchase price
                'diskon' => 12,  // Diskon 12%
                'harga_akhir' => 6000000.00 - (6000000.00 * 0.12),  // 12% off
                'stok' => 30,
                'kategori_id' => 2,
                'deskripsi' => 'AC Daikin Inverter 1.5 PK, hemat energi dan ramah lingkungan',
                'margin' => 6000000.00 - 5500000.00,  // Added margin
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'merk' => 'Sharp',
                'nama_barang' => 'Sharp AC 1.5 PK',
                'harga' => 5000000.00,
                'harga_beli' => 4500000.00,  // Added purchase price
                'diskon' => 12,  // Diskon 12%
                'harga_akhir' => 5000000.00 - (5000000.00 * 0.12),  // 12% off
                'stok' => 25,
                'kategori_id' => 2,
                'deskripsi' => 'AC Sharp 1.5 PK dengan teknologi Plasmacluster',
                'margin' => 5000000.00 - 4500000.00,  // Added margin
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'merk' => 'Samsung',
                'nama_barang' => 'Samsung AC 1.5 PK',
                'harga' => 5500000.00,
                'harga_beli' => 5000000.00,  // Added purchase price
                'diskon' => 15,  // Diskon 15%
                'harga_akhir' => 5500000.00 - (5500000.00 * 0.15),  // 15% off
                'stok' => 25,
                'kategori_id' => 2,
                'deskripsi' => 'AC Samsung 1.5 PK dengan mode tidur otomatis',
                'margin' => 5500000.00 - 5000000.00,  // Added margin
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'merk' => 'LG',
                'nama_barang' => 'LG Dual Inverter AC 1.5 PK',
                'harga' => 5800000.00,
                'harga_beli' => 5300000.00,  // Added purchase price
                'diskon' => 9,  // Diskon 9%
                'harga_akhir' => 5800000.00 - (5800000.00 * 0.09),  // 9% off
                'stok' => 20,
                'kategori_id' => 2,
                'deskripsi' => 'AC LG Dual Inverter 1.5 PK dengan efisiensi energi tinggi dan pendinginan cepat',
                'margin' => 5800000.00 - 5300000.00,  // Added margin
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'merk' => 'Panasonic',
                'nama_barang' => 'Panasonic Eco Smart AC 1 PK',
                'harga' => 4500000.00,
                'harga_beli' => 4000000.00,  // Added purchase price
                'diskon' => 9,  // Diskon 9%
                'harga_akhir' => 4500000.00 - (4500000.00 * 0.09),  // 9% off
                'stok' => 15,
                'kategori_id' => 2,
                'deskripsi' => 'Panasonic Eco Smart AC 1 PK dengan teknologi nanoe-G yang mampu menyaring bakteri',
                'margin' => 4500000.00 - 4000000.00,  // Added margin
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'merk' => 'Mitsubishi',
                'nama_barang' => 'Mitsubishi Electric AC 1 PK',
                'harga' => 4800000.00,
                'harga_beli' => 4400000.00,  // Added purchase price
                'diskon' => 9,  // Diskon 9%
                'harga_akhir' => 4800000.00 - (4800000.00 * 0.09),  // 9% off
                'stok' => 18,
                'kategori_id' => 2,
                'deskripsi' => 'Mitsubishi Electric AC 1 PK dengan sistem aliran udara lebar dan hemat listrik',
                'margin' => 4800000.00 - 4400000.00,  // Added margin
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'merk' => 'Toshiba',
                'nama_barang' => 'Toshiba Inverter AC 1.5 PK',
                'harga' => 5300000.00,
                'harga_beli' => 4900000.00,  // Added purchase price
                'diskon' => 11,  // Diskon 11%
                'harga_akhir' => 5300000.00 - (5300000.00 * 0.11),  // 11% off
                'stok' => 22,
                'kategori_id' => 2,
                'deskripsi' => 'Toshiba Inverter AC 1.5 PK dengan teknologi inverter dan fitur auto-cleaning',
                'margin' => 5300000.00 - 4900000.00,  // Added margin
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'merk' => 'Hitachi',
                'nama_barang' => 'Hitachi Standard AC 1 PK',
                'harga' => 4700000.00,
                'harga_beli' => 4300000.00,  // Added purchase price
                'diskon' => 7,  // Diskon 7%
                'harga_akhir' => 4700000.00 - (4700000.00 * 0.07),  // 7% off
                'stok' => 12,
                'kategori_id' => 2,
                'deskripsi' => 'Hitachi Standard AC 1 PK, dilengkapi dengan filter anti-bakteri dan ramah lingkungan',
                'margin' => 4700000.00 - 4300000.00,  // Added margin
                'created_at' => now(),
                'updated_at' => now(),
            ],


            // Other Products
            [
                'merk' => 'Markiplier',
                'nama_barang' => 'Filter AC',
                'harga_beli' => 80000.00,
                'harga' => 100000.00,
                'margin' => 20000.00,
                'diskon' => 20,  // Adjusted to percentage
                'harga_akhir' => 100000.00 - (100000.00 * 0.20),  // Calculated after discount
                'stok' => 200,
                'kategori_id' => 3,
                'deskripsi' => 'Filter AC untuk menjaga kebersihan udara',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'merk' => 'Panasonic',
                'nama_barang' => 'Remote AC Universal',
                'harga_beli' => 60000.00,
                'harga' => 75000.00,
                'margin' => 15000.00,
                'diskon' => 12,  // Adjusted to percentage
                'harga_akhir' => 75000.00 - (75000.00 * 0.12),  // Calculated after discount
                'stok' => 150,
                'kategori_id' => 3,
                'deskripsi' => 'Remote control universal untuk berbagai jenis AC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'merk' => 'Cosmos',
                'nama_barang' => 'Kipas Angin Portable',
                'harga_beli' => 100000.00,
                'harga' => 120000.00,
                'margin' => 20000.00,
                'diskon' => 15,  // Adjusted to percentage
                'harga_akhir' => 120000.00 - (120000.00 * 0.15),  // Calculated after discount
                'stok' => 80,
                'kategori_id' => 3,
                'deskripsi' => 'Kipas angin portable untuk ruangan kecil',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'merk' => 'Whirlpool',
                'nama_barang' => 'Pembersih Udara',
                'harga_beli' => 300000.00,
                'harga' => 350000.00,
                'margin' => 50000.00,
                'diskon' => 10,  // Adjusted to percentage
                'harga_akhir' => 350000.00 - (350000.00 * 0.10),  // Calculated after discount
                'stok' => 60,
                'kategori_id' => 3,
                'deskripsi' => 'Pembersih udara dengan teknologi filter HEPA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'merk' => 'Daikin',
                'nama_barang' => 'Penghangat Ruangan',
                'harga_beli' => 500000.00,
                'harga' => 600000.00,
                'margin' => 100000.00,
                'diskon' => 5,  // Adjusted to percentage
                'harga_akhir' => 600000.00 - (600000.00 * 0.05),  // Calculated after discount
                'stok' => 50,
                'kategori_id' => 3,
                'deskripsi' => 'Penghangat ruangan untuk cuaca dingin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
