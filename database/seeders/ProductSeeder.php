<?php

namespace Database\Seeders;

use App\Models\Color;
use App\Models\Product;
use App\Models\Category;
use App\Models\Location;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
                'image' => 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-15-pro-model-select?wid=400&hei=400&fmt=jpeg&qlt=95',
            ],
            [
                'name' => 'MacBook Pro 14” M3',
                'description' => 'Professional performance with Apple M3 chip and Liquid Retina XDR display.',
                'price' => 1999.00,
                'stock' => 15,
                'category' => 'MacBook',
                'image' => 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/mbp14-spacegray-202310?wid=400&hei=400&fmt=jpeg&qlt=95',
            ],
            [
                'name' => 'iPad Air (5th Gen)',
                'description' => 'Ultra-light and powerful with M1 chip, ideal for creativity.',
                'price' => 749.00,
                'stock' => 30,
                'category' => 'iPad',
                'image' => 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/ipad-air-select-wifi-blue-202203?wid=400&hei=400&fmt=jpeg&qlt=95',
            ],
            [
                'name' => 'Apple Watch Series 9',
                'description' => 'Fitness and health tracking with the S9 chip and brighter display.',
                'price' => 429.00,
                'stock' => 40,
                'category' => 'Watch',
                'image' => 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/watch-s9-select-202309?wid=400&hei=400&fmt=jpeg&qlt=95',
            ],
            [
                'name' => 'AirPods Pro (2nd Gen)',
                'description' => 'Immersive audio with active noise cancellation and spatial sound.',
                'price' => 249.00,
                'stock' => 60,
                'category' => 'Accessories',
                'image' => 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/airpods-pro-2nd-gen-202209?wid=400&hei=400&fmt=jpeg&qlt=95',
            ],
            [
                'name' => 'iPhone SE (3rd Gen)',
                'description' => 'Compact design with A15 Bionic chip and Touch ID.',
                'price' => 429.00,
                'stock' => 20,
                'category' => 'iPhone',
                'image' => 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-se-midnight-select-202203?wid=400&hei=400&fmt=jpeg&qlt=95',
            ],
            [
                'name' => 'MacBook Air 13” M2',
                'description' => 'Ultra-slim and lightweight with powerful M2 chip.',
                'price' => 1099.00,
                'stock' => 18,
                'category' => 'MacBook',
                'image' => 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/macbook-air-midnight-gallery1-202206?wid=400&hei=400&fmt=jpeg&qlt=95',
            ],
            [
                'name' => 'iPad Pro 11” (M4)',
                'description' => 'Blazing fast M4 chip with ProMotion and advanced cameras.',
                'price' => 999.00,
                'stock' => 10,
                'category' => 'iPad',
                'image' => 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/ipad-pro-11-select-202405?wid=400&hei=400&fmt=jpeg&qlt=95',
            ],
            [
                'name' => 'Apple Watch Ultra 2',
                'description' => 'Extreme durability with titanium case and 36-hour battery.',
                'price' => 799.00,
                'stock' => 12,
                'category' => 'Watch',
                'image' => 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/watch-ultra2-select-202309?wid=400&hei=400&fmt=jpeg&qlt=95',
            ],
            [
                'name' => 'Apple Vision Pro',
                'description' => 'Mixed-reality headset with spatial computing capabilities.',
                'price' => 3499.00,
                'stock' => 5,
                'category' => 'Accessories',
                'image' => 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/apple-vision-pro-hero-202401?wid=400&hei=400&fmt=jpeg&qlt=95',
            ],
            [
                'name' => 'MagSafe Duo Charger',
                'description' => 'Foldable charger for iPhone and Apple Watch.',
                'price' => 129.00,
                'stock' => 35,
                'category' => 'Accessories',
                'image' => 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/magsafe-duo-charger?wid=400&hei=400&fmt=jpeg&qlt=95',
            ],
            [
                'name' => 'HomePod Mini',
                'description' => 'Smart speaker with Siri and 360-degree sound.',
                'price' => 99.00,
                'stock' => 50,
                'category' => 'Accessories',
                'image' => 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/homepod-mini-select-202110?wid=400&hei=400&fmt=jpeg&qlt=95',
            ],
            [
                'name' => 'Apple Pencil (2nd Gen)',
                'description' => 'Precision tool for drawing and note-taking on iPad.',
                'price' => 129.00,
                'stock' => 45,
                'category' => 'Accessories',
                'image' => 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/apple-pencil-gen2?wid=400&hei=400&fmt=jpeg&qlt=95',
            ],
            [
                'name' => 'Magic Keyboard for iPad Pro',
                'description' => 'Keyboard and trackpad with floating design for iPad.',
                'price' => 299.00,
                'stock' => 25,
                'category' => 'Accessories',
                'image' => 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/magic-keyboard-ipad-pro-2020?wid=400&hei=400&fmt=jpeg&qlt=95',
            ],
            [
                'name' => 'Mac Studio (M2 Ultra)',
                'description' => 'Ultimate performance for professionals.',
                'price' => 3999.00,
                'stock' => 7,
                'category' => 'MacBook',
                'image' => 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/mac-studio-2023?wid=400&hei=400&fmt=jpeg&qlt=95',
            ],
            [
                'name' => 'AirTag',
                'description' => 'Track your items with precision using Apple\'s AirTag.',
                'price' => 29.00,
                'stock' => 100,
                'category' => 'Accessories',
                'image' => 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/airtag-202104?wid=400&hei=400&fmt=jpeg&qlt=95',
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
