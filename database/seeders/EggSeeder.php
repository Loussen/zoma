<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EggSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Chicken: id=1
        DB::table('eggs')->insert([
            ['bird_id' => 1, 'name' => 'Yellow Egg', 'color' => 'yellow-400', 'value' => 1, 'interval_minutes' => 10],
            ['bird_id' => 1, 'name' => 'Red Egg', 'color' => 'red-500', 'value' => 3, 'interval_minutes' => 30],
            ['bird_id' => 1, 'name' => 'Chocolate Egg', 'color' => '#7B3F00', 'value' => 10, 'interval_minutes' => 60],
        // Goose: id=2
            ['bird_id' => 2, 'name' => 'White Egg', 'color' => 'gray-100', 'value' => 2, 'interval_minutes' => 15],
            ['bird_id' => 2, 'name' => 'Orange Egg', 'color' => 'orange-400', 'value' => 4, 'interval_minutes' => 40],
            ['bird_id' => 2, 'name' => 'Pink Egg', 'color' => 'pink-400', 'value' => 7, 'interval_minutes' => 60],
        // Ostrich: id=3
            ['bird_id' => 3, 'name' => 'Blue Egg', 'color' => 'blue-500', 'value' => 8, 'interval_minutes' => 45],
            ['bird_id' => 3, 'name' => 'Green Egg', 'color' => 'green-500', 'value' => 5, 'interval_minutes' => 20],
            ['bird_id' => 3, 'name' => 'Lilac Egg', 'color' => '#C8A2C8', 'value' => 12, 'interval_minutes' => 120],
        // Duck: id=4
            ['bird_id' => 4, 'name' => 'Sunset Egg', 'color' => 'orange-300', 'value' => 6, 'interval_minutes' => 20],
            ['bird_id' => 4, 'name' => 'Mint Egg', 'color' => 'teal-300', 'value' => 9, 'interval_minutes' => 45],
            ['bird_id' => 4, 'name' => 'Golden Egg', 'color' => 'amber-300', 'value' => 15, 'interval_minutes' => 120],
        ]);
    }
}
