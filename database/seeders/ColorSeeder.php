<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            'gray',
            'Black',
            'Black Titanium',
            'Midnight',
            'Gold',
            'Sky-Blue',
            'White',
            'Silver',
            'Red',  
        ];

        foreach($objs as $obj){
            Color::create([
                'name' => $obj,
            ]);
        }
    }
}
