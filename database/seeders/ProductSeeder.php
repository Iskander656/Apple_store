<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use App\Models\Color;
use App\Models\Location;

class ProductSeeder extends Seeder
{
    public function run()
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
        ];

        foreach ($products as $data) {
            Product::create([
                'name' => $data['name'],
                'description' => $data['description'],
                'price' => $data['price'],
                'stock' => $data['stock'],
                'category_id' => Category::where('name', $data['category'])->first()->id,
                'color_id' => Color::inRandomOrder()->first()->id,
                'location_id' => Location::inRandomOrder()->first()->id,
                'image' => null,
            ]);
        }
    }
}
