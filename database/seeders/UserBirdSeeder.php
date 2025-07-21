<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserBirdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_birds')->insert([
            ['user_id' => 1, 'bird_id' => 1, 'count' => 2],
            ['user_id' => 1, 'bird_id' => 2, 'count' => 1],
            ['user_id' => 1, 'bird_id' => 4, 'count' => 1],
        ]);
    }
}
