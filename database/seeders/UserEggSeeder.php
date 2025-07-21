<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserEggSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_eggs')->insert([
            ['user_id' => 1, 'egg_id' => 1, 'count' => 5], // Yellow Egg
            ['user_id' => 1, 'egg_id' => 4, 'count' => 2], // White Egg
            ['user_id' => 1, 'egg_id' => 10, 'count' => 1], // Sunset Egg
        ]);
    }
}
