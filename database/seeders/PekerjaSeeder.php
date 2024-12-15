<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PekerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_pekerja')->insert([
            [
                'nama_pekerja' => 'John Doe',
                'email' => 'johndoe@example.com',
                'telepon' => '08123456789',
                'alamat' => 'Jl. Raya No.1, Jakarta',
                'status' => 'TERSEDIA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pekerja' => 'Jane Smith',
                'email' => 'janesmith@example.com',
                'telepon' => '08987654321',
                'alamat' => 'Jl. Merdeka No.2, Bandung',
                'status' => 'ONGOING',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
