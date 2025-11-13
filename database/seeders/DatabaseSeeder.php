<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Hapus pembuat User default
        // User::factory(10)->create();
        
        // Hapus pembuat User test default
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Panggil Seeder baru kita
        $this->call([
            UserSeeder::class,
            ProductServiceSeeder::class,
        ]);
    }
}