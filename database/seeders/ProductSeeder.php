<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::insert([
            [
                'name' => 'iPhone 16 Pro',
                'slug' => 'iphone-16-pro',
                'description' => "Powerful A17 Bionic chip\n6.1\" Super Retina XDR display\nTriple 48MP camera system",
                'image' => 'W57N8_SQ1_0000000004_BLACK_SLf.webp',
                'price' => 899.99,
                'old_price' => 999.99,
                'category' => 'phones',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'iPhone 16',
                'slug' => 'iphone-16',
                'description' => "A17 Bionic chip\n6.1\" Super Retina XDR display\nDual 12MP camera system",
                'image' => 'M10270376_black.webp',
                'price' => 799.99,
                'old_price' => 899.99,
                'category' => 'phones',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'iPhone 16 Pro Max',
                'slug' => 'iphone-16-pro-max',
                'description' => "A17 Bionic chip\n6.7\" Super Retina XDR display\nTriple 48MP camera system with LiDAR",
                'image' => 'W57N8_SQ1_0000000004_BLACK_SLf.webp',
                'price' => 999.99,
                'old_price' => 1199.99,
                'category' => 'phones',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'iPhone 16 (Variant)',
                'slug' => 'iphone-16-variant',
                'description' => "A17 Bionic chip\n6.1\" Super Retina XDR display\nDual 12MP camera system",
                'image' => 'p5zs9lbfpiwe4h468lwjqe9rdizwuvpk.jpg',
                'price' => 799.99,
                'old_price' => 899.99,
                'category' => 'phones',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'iPhone 16 Pro (Variant)',
                'slug' => 'iphone-16-pro-variant',
                'description' => "A17 Bionic chip\n6.1\" Super Retina XDR display\nTriple 48MP camera system",
                'image' => 'iphone-card-40-iphone16prohero-202409_FMT_WHH.jpeg',
                'price' => 799.99,
                'old_price' => 899.99,
                'category' => 'phones',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Watch 9 SERIES',
                'slug' => 'watch-9-series',
                'description' => "Always-On Retina display\nHealth monitoring\nImproved battery life",
                'image' => 'images-17.jpeg',
                'price' => 699.99,
                'old_price' => 799.99,
                'category' => 'wearables',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'MacBook Air M4',
                'slug' => 'macbook-air-m4',
                'description' => "Apple M4 chip for lightning speed\n13.6-inch Liquid Retina display\nUp to 18 hours battery life",
                'image' => 'utsya4de5dqh5yhc07gys03t0sz1aopj.jpg',
                'price' => 1099.99,
                'old_price' => 1199.99,
                'category' => 'laptops',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'iPad Pro 13',
                'slug' => 'ipad-pro-13',
                'description' => "M4 Chip with Neural Engine\nLiquid Retina XDR display\nThunderbolt port for accessories",
                'image' => 'planshet_new_3.png',
                'price' => 999.99,
                'old_price' => 1099.99,
                'category' => 'tablets',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'AirPods Pro 2nd Gen',
                'slug' => 'airpods-pro-2nd-gen',
                'description' => "Active Noise Cancellation\nAdaptive Transparency\nUp to 6 hours listening time",
                'image' => 'airpods-pro-2022.jpeg',
                'price' => 199.99,
                'old_price' => 249.99,
                'category' => 'audio',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}