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
            [
                'nama_kategori' => 'Elektronik',
                'deskripsi' => 'Peralatan elektronik dan gadget',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kategori' => 'Pakaian',
                'deskripsi' => 'Pakaian pria dan wanita',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
