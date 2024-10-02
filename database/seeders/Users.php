<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin/Seller',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'email_verified_at' => now(),
            'password' => Hash::make('123'),
            'remember_token' => \Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Default User 1
        DB::table('users')->insert([
            'name' => 'Buyer 1',
            'email' => 'buyer@gmail.com',
            'role' => 'user',
            'email_verified_at' => now(),
            'password' => Hash::make('123'),
            'remember_token' => \Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Default User 2
        DB::table('users')->insert([
            'name' => 'User Two',
            'email' => 'buyer2@gmail.com',
            'role' => 'user',
            'email_verified_at' => now(),
            'password' => Hash::make('123'),
            'remember_token' => \Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
