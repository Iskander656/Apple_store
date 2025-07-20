<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            'iPhone',
            'Macbook',
            'iPad',
            'AirPods',
            'Watch',
            'Accessories',
        ];

        foreach ($objs as $obj) {
            Category::create([
                'name' => $obj,
            ]);
        }
    }
}
