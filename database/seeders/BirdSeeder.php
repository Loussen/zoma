<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BirdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('birds')->insert([
            ['name' => 'Chicken', 'price' => 500],
            ['name' => 'Goose', 'price' => 1200],
            ['name' => 'Ostrich', 'price' => 5000],
            ['name' => 'Duck', 'price' => 2000],
        ]);
    }
}
