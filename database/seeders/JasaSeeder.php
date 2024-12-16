<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JasaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_jasa')->insert([
            [
                'kategori_id' => 1,
                'nama_jasa' => 'Service AC',
                'deskripsi' => 'Layanan service untuk AC',
                'tarif' => 150000,
                'pekerja_id' => 1,  // Ensure this pekerja_id exists in tb_pekerja table
                'status' => 'TERSEDIA',
                'snk' => 'Layanan meliputi pengecekan dan perawatan AC.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 1,
                'nama_jasa' => 'Pemasangan AC',
                'deskripsi' => 'Layanan pemasangan unit AC baru',
                'tarif' => 500000,
                'pekerja_id' => null,  // Ensure pekerja_id can be null
                'status' => 'PENDING',
                'snk' => 'Pemasangan dilakukan dengan bahan yang sudah disiapkan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);


    }
}
