<?php

namespace Database\Seeders;

use App\Models\Order;
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
            'Cancelled',
            'Delayed',
            'Pending',
        ];

        foreach($objs as $obj){
            Order::create([
                'customer_name' => 'Customer ' . rand(1, 100),
                'status' => $obj,
            ]);
        }
    }
}
