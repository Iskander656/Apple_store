<?php

namespace Database\Seeders;

use App\Models\Color;
use App\Models\Product;
use App\Models\Category;
use App\Models\Location;
use Illuminate\Database\Seeder;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $products = [
            [
                'name' => 'iPhone 15 Pro Max',
                'description' => 'Apple\'s latest flagship with A17 chip and titanium body.',
                'price' => 1399.99,
                'stock' => 25,
                'category' => 'iPhone',
                'image' => 'img/iPhone 16 Pro Max.jpeg',
            ],
            [
                'name' => 'MacBook Pro 14” M3',
                'description' => 'Professional performance with Apple M3 chip and Liquid Retina XDR display.',
                'price' => 1999.00,
                'stock' => 15,
                'category' => 'MacBook',
                'image' => 'img/MacBook Pro.jpeg',
            ],
            [
                'name' => 'iPad Air (5th Gen)',
                'description' => 'Ultra-light and powerful with M1 chip, ideal for creativity.',
                'price' => 749.00,
                'stock' => 30,
                'category' => 'iPad',
                'image' => 'img/iPad Air.jpg.webp',
            ],
            [
                'name' => 'Apple Watch Series 9',
                'description' => 'Fitness and health tracking with the S9 chip and brighter display.',
                'price' => 429.00,
                'stock' => 40,
                'category' => 'Watch',
                'image' => 'img/Apple watch.jpeg',
            ],
            [
                'name' => 'AirPods Pro (2nd Gen)',
                'description' => 'Immersive audio with active noise cancellation and spatial sound.',
                'price' => 249.00,
                'stock' => 60,
                'category' => 'AirPods',
                'image' => 'img/Airpods 2nd Gen.jpeg',
            ],
            [
                'name' => 'iPhone SE (3rd Gen)',
                'description' => 'Compact design with A15 Bionic chip and Touch ID.',
                'price' => 429.00,
                'stock' => 20,
                'category' => 'iPhone',
                'image' => 'img/iPhone SE.jpg',
            ],
            [
                'name' => 'MacBook Air 13” M2',
                'description' => 'Ultra-slim and lightweight with powerful M2 chip.',
                'price' => 1099.00,
                'stock' => 18,
                'category' => 'MacBook',
                'image' => 'img/Mac M2.jpg.webp',
            ],
            [
                'name' => 'iPad Pro 11” (M4)',
                'description' => 'Blazing fast M4 chip with ProMotion and advanced cameras.',
                'price' => 999.00,
                'stock' => 10,
                'category' => 'iPad',
                'image' => 'img/ipad-pro-11-in-2nd-generation-space-gray.jpg',
            ],
            [
                'name' => 'Apple Watch Ultra 2',
                'description' => 'Extreme durability with titanium case and 36-hour battery.',
                'price' => 799.00,
                'stock' => 12,
                'category' => 'Watch',
                'image' => 'img/Watch Ultra.jpeg',
            ],
            [
                'name' => 'Apple Vision Pro',
                'description' => 'Mixed-reality headset with spatial computing capabilities.',
                'price' => 3499.00,
                'stock' => 5,
                'category' => 'Accessories',
                'image' => 'img/Vision.jpg',
            ],
            [
                'name' => 'MagSafe Duo Charger',
                'description' => 'Foldable charger for iPhone and Apple Watch.',
                'price' => 129.00,
                'stock' => 35,
                'category' => 'Accessories',
                'image' => 'img/Magsafe.jpg.webp',
            ],
            [
                'name' => 'HomePod Mini',
                'description' => 'Smart speaker with Siri and 360-degree sound.',
                'price' => 99.00,
                'stock' => 50,
                'category' => 'Accessories',
                'image' => 'img/HomePod.jpg',
            ],
            [
                'name' => 'Apple Pencil (2nd Gen)',
                'description' => 'Precision tool for drawing and note-taking on iPad.',
                'price' => 129.00,
                'stock' => 45,
                'category' => 'Accessories',
                'image' => 'img/Pencil.png',
            ],
            [
                'name' => 'Magic Keyboard for iPad Pro',
                'description' => 'Keyboard and trackpad with floating design for iPad.',
                'price' => 299.00,
                'stock' => 25,
                'category' => 'Accessories',
                'image' => 'img/Magic keyboard.jpeg',
            ],
            [
                'name' => 'Mac Studio (M2 Ultra)',
                'description' => 'Ultimate performance for professionals.',
                'price' => 3999.00,
                'stock' => 7,
                'category' => 'MacBook',
                'image' => 'img/Mac Studio.png',
            ],
            [
                'name' => 'AirTag',
                'description' => 'Track your items with precision using Apple\'s AirTag.',
                'price' => 29.00,
                'stock' => 100,
                'category' => 'Accessories',
                'image' => 'img/AirTag.jpeg'
            ],
            [
                'name' => 'iPhone 16 Pro',
                'description' => 'Next-gen A18 chip, AI-powered photography, and enhanced battery life.',
                'price' => 1599.00,
                'stock' => 10,
                'category' => 'iPhone',
                'image' => 'img/iPhone 16 Pro.webp',
            ],
            [
                'name' => 'MacBook Pro 14” M4',
                'description' => 'Unmatched performance for devs and creatives with ultra-efficient M4 chip.',
                'price' => 2399.00,
                'stock' => 7,
                'category' => 'MacBook',
                'image' => 'img/MacBook Pro.jpeg',
            ],
            [
                'name' => 'MacBook Air 13” M4',
                'description' => 'Super lightweight M4 notebook with silent cooling and all-day battery.',
                'price' => 1299.00,
                'stock' => 15,
                'category' => 'MacBook',
                'image' => 'img/Macbook Air.jpg',
            ],
            [
                'name' => 'iPhone 16',
                'description' => 'A18 chip, enhanced thermal design, and improved main camera.',
                'price' => 999.00,
                'stock' => 12,
                'category' => 'iPhone',
                'image' => 'img/Iphone 16 plus(green).jpg',
            ],
            [
                'name' => 'Apple Vision Pro 2',
                'description' => 'Second-generation spatial headset with reduced weight and improved eye tracking.',
                'price' => 3199.00,
                'stock' => 4,
                'category' => 'Accessories',
                'image' => 'img/Vision.jpg',
            ],
            [
                'name' => 'AirPods 4',
                'description' => 'Redesigned with better fit, adaptive audio, and Find My case support.',
                'price' => 199.00,
                'stock' => 50,
                'category' => 'AirPods',
                'image' => 'img/airpods-4.jpeg',
            ],
            [
                'name' => 'iPhone 16',
                'description' => 'iPhone 16 with A18 chip, 128GB storage in Blue.',
                'price' => 999.00,
                'stock' => 15,
                'category' => 'iPhone',
                'image' => 'img/iPhone 16.jpeg',
            ],
            [
                'name' => 'iPhone 16 Blue 256GB',
                'description' => 'iPhone 16 with A18 chip, 256GB storage in Blue.',
                'price' => 1099.00,
                'stock' => 10,
                'category' => 'iPhone',
                'image' => 'img/iPhone 16.jpeg',
            ],
            [
                'name' => 'iPhone 16 Plus Purple 128GB',
                'description' => 'iPhone 16 Plus with A18 chip, 128GB storage in Black.',
                'price' => 1099.00,
                'stock' => 12,
                'category' => 'iPhone',
                'image' => 'img/Iphone 16 (Purple).jpg',
            ],
            [
                'name' => 'iPhone 16 Plus Black 256GB',
                'description' => 'iPhone 16 Plus with A18 chip, 256GB storage in Black.',
                'price' => 1199.00,
                'stock' => 8,
                'category' => 'iPhone',
                'image' => 'img/iPhone 16 Plus.webp',
            ],
            [
                'name' => 'iPhone 16 Pro White Titanium 256GB',
                'description' => 'iPhone 16 Pro with A18 Pro chip, 256GB storage in White Titanium.',
                'price' => 1299.00,
                'stock' => 9,
                'category' => 'iPhone',
                'image' => 'img/iPhone 16 Pro.webp',
            ],
            [
                'name' => 'iPhone 16 Pro White Titanium 512GB',
                'description' => 'iPhone 16 Pro with A18 Pro chip, 512GB storage in White Titanium.',
                'price' => 1499.00,
                'stock' => 5,
                'category' => 'iPhone',
                'image' => 'img/iPhone 16 Pro.webp',
            ],
            [
                'name' => 'iPhone 16 Pro Max Natural Titanium 256GB',
                'description' => 'iPhone 16 Pro Max with advanced camera and 256GB storage in Natural Titanium.',
                'price' => 1399.00,
                'stock' => 6,
                'category' => 'iPhone',
                'image' => 'img/iPhone 16 Pro Max.jpeg',
            ],
            [
                'name' => 'iPhone 16 Pro Max Natural Titanium 1TB',
                'description' => 'iPhone 16 Pro Max with massive 1TB storage for professionals in Natural Titanium.',
                'price' => 1799.00,
                'stock' => 3,
                'category' => 'iPhone',
                'image' => 'img/iPhone 16 Pro Max.jpeg',
            ],
            [
                'name' => 'MacBook Air 13” M4 Midnight 256GB',
                'description' => 'M4-powered ultra-light MacBook Air in Midnight with 256GB SSD.',
                'price' => 1299.00,
                'stock' => 10,
                'category' => 'MacBook',
                'image' => 'img/Macbook Air.jpg',
            ],
            [
                'name' => 'MacBook Air 13” M4 Midnight 512GB',
                'description' => 'M4-powered ultra-light MacBook Air in Midnight with 512GB SSD.',
                'price' => 1499.00,
                'stock' => 7,
                'category' => 'MacBook',
                'image' => 'img/Macbook Air.jpg',
            ],
            [
                'name' => 'MacBook Pro 14” M4 Space Black 512GB',
                'description' => 'M4 chip, 14” Liquid Retina XDR, 512GB SSD in Silver.',
                'price' => 1999.00,
                'stock' => 5,
                'category' => 'MacBook',
                'image' => 'img/MacBook Pro.jpeg',
            ],
            [
                'name' => 'MacBook Pro 14” M4 Space Black 1TB',
                'description' => 'High-performance MacBook Pro with 1TB SSD in Space Black.',
                'price' => 2499.00,
                'stock' => 4,
                'category' => 'MacBook',
                'image' => 'img/MacBook Pro.jpeg',
            ],
        ];

        foreach ($products as $data) {
            Product::create([
                'name' => $data['name'],
                'description' => $data['description'],
                'price' => $data['price'],
                'stock' => $data['stock'],
                'category_id' => Category::where('name', $data['category'])->firstOrFail()->id,
                'color_id' => Color::inRandomOrder()->first()->id,
                'location_id' => Location::inRandomOrder()->first()->id,
                'image' => $data['image'],
            ]);
        }
    }
}
