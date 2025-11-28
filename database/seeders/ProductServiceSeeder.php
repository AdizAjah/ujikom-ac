<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\Product;

class ProductServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Buat Data Jasa (Services)
        Service::create([
            'name' => 'Cuci Ac Split (Ac Rumah)',
            'description' => 'Cuci Ac 0,5~1 Pk',
            'price' => 70000,
        ]);
        Service::create([
            'name' => 'Cuci AC Standing Floor',
            'description' => 'Cuci Standing Floor',
            'price' => 250000,
        ]);
        Service::create([
            'name' => 'Cuci AC Cassette',
            'description' => 'Cuci Ac Cassette',
            'price' => 250000,
        ]);
        Service::create([
            'name' => 'Bongkar Pasang AC',
            'description' => 'Bongkar unit di lokasi lama dan pasang di lokasi baru.',
            'price' => 350000,
        ]);
        Service::create([
            'name' => 'Cuci Ac Split Duck',
            'description' => 'Cuci Ac Split Duck',
            'price' => 250000, // Harga untuk pengecekan awal
        ]);

        // 2. Buat Data Produk (Products)
        Product::create([
            'name' => 'Sharp AH-A5BEY',
            'description' => '1/2 PK',
            'price' => 2800000,
            'stock' => 10,
            'image_url' => 'https://placehold.co/600x400/EEE/313131?text=AC+Daikin'
        ]);
        Product::create([
            'name' => 'AC Sharp 1 PK Inverter',
            'description' => 'Pendingin ruangan 1 PK hemat listrik dengan J-Tech Inverter.',
            'price' => 4500000,
            'stock' => 5,
            'image_url' => 'https://placehold.co/600x400/EEE/313131?text=AC+Sharp'
        ]);
        Product::create([
            'name' => 'AC LG 1/2 PK DUALCOOL',
            'description' => 'Pendingin ruangan 1/2 PK dengan DUALCOOL Inverter.',
            'price' => 4200000,
            'stock' => 7,
            'image_url' => 'https://placehold.co/600x400/EEE/313131?text=AC+LG'
        ]);

        // // Buat 7 produk palsu lainnya
        // for ($i = 1; $i <= 7; $i++) {
        //     Product::create([
        //         'name' => "AC Generik Model {$i}",
        //         'description' => "Deskripsi singkat untuk AC Generik Model {$i}.",
        //         'price' => rand(20, 50) * 100000,
        //         'stock' => rand(5, 20),
        //         'image_url' => 'https://placehold.co/600x400/EEE/313131?text=AC+Generik+' . $i
        //     ]);
        // }
    }
}