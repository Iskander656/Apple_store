<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            'Black Titanium',
            'Natural Titanium',
            'Midnight',
            'Gold',
            'Red'
        ];

        foreach($objs as $obj){
            Color::create([
                'name' => $obj,
            ]);
        }
    }
}
