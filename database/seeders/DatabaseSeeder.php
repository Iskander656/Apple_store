<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Database\Seeders\ColorSeeder;
use Database\Seeders\OrderSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\LocationSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ColorSeeder::class,
            LocationSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            OrderSeeder::class,
        ]);
    }
}
