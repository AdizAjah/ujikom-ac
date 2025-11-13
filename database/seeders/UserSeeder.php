<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Buat Admin
        User::create([
            'name' => 'Admin Mega Jaya',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // password
            'role' => 'admin',
            'phone' => '081234567890',
            'address' => 'Jl. Admin No. 1, Jakarta',
        ]);

        // 2. Buat User Biasa
        User::create([
            'name' => 'User Biasa',
            'email' => 'user@example.com',
            'password' => Hash::make('password'), // password
            'role' => 'user',
            'phone' => '089876543210',
            'address' => 'Jl. User No. 1, Bandung',
        ]);
    }
}