<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use App\Models\Location;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            'Delivered',
            'Cancelled by Customer',
            'Delayed',
            'Pending',
        ];

        foreach ($objs as $obj) {
            Order::create([
                'customer_name' => fake()->name(),
                'phone' => fake()->phoneNumber(),
                'location_id' => Location::inRandomOrder()->first()->id,
                'product_id' => Product::inRandomOrder()->first()->id,
                'status' => $obj,
            ]);
        }
    }
}
