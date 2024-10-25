<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Soul', 'track_count' => 0],
            ['name' => 'Ambient', 'track_count' => 0],
            ['name' => 'Pop', 'track_count' => 0],
            ['name' => 'Rap', 'track_count' => 0],
            ['name' => 'Funk', 'track_count' => 0],
            ['name' => 'Rock', 'track_count' => 0],
            ['name' => 'Reggae / Dub', 'track_count' => 0],
            ['name' => 'Techno', 'track_count' => 0],
            ['name' => 'Electro', 'track_count' => 0],
        ];

        DB::table('categories')->insert($categories);
    }
}
