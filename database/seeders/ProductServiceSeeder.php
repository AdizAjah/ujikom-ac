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
            'name' => 'Cuci AC 0.5 - 1 PK',
            'description' => 'Pencucian unit indoor, outdoor, dan filter.',
            'price' => 75000,
        ]);
        Service::create([
            'name' => 'Cuci AC 1.5 - 2 PK',
            'description' => 'Pencucian unit indoor, outdoor, dan filter untuk AC besar.',
            'price' => 100000,
        ]);
        Service::create([
            'name' => 'Isi Freon R32',
            'description' => 'Penambahan freon R32 per unit.',
            'price' => 150000,
        ]);
        Service::create([
            'name' => 'Bongkar Pasang AC',
            'description' => 'Bongkar unit di lokasi lama dan pasang di lokasi baru.',
            'price' => 350000,
        ]);
        Service::create([
            'name' => 'Service Perbaikan',
            'description' => 'Pengecekan dan perbaikan kerusakan. Harga final tergantung kerusakan.',
            'price' => 100000, // Harga untuk pengecekan awal
        ]);

        // 2. Buat Data Produk (Products)
        Product::create([
            'name' => 'AC Daikin 1/2 PK Standard',
            'description' => 'Pendingin ruangan 1/2 PK, daya 389 Watt.',
            'price' => 3500000,
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

        // Buat 7 produk palsu lainnya
        for ($i = 1; $i <= 7; $i++) {
            Product::create([
                'name' => "AC Generik Model {$i}",
                'description' => "Deskripsi singkat untuk AC Generik Model {$i}.",
                'price' => rand(20, 50) * 100000,
                'stock' => rand(5, 20),
                'image_url' => 'https://placehold.co/600x400/EEE/313131?text=AC+Generik+' . $i
            ]);
        }
    }
}