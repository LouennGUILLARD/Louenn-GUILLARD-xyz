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
            ['name' => 'Soul', 'tracks_count' => 0],
            ['name' => 'Ambient', 'tracks_count' => 0],
            ['name' => 'Pop', 'tracks_count' => 0],
            ['name' => 'Rap', 'tracks_count' => 0],
            ['name' => 'Funk', 'tracks_count' => 0],
            ['name' => 'Rock', 'tracks_count' => 0],
            ['name' => 'Reggae / Dub', 'tracks_count' => 0],
            ['name' => 'Techno', 'tracks_count' => 0],
            ['name' => 'Electro', 'tracks_count' => 0],
        ];

        DB::table('categories')->insert($categories);
    }
}
