<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\features;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        features::insert([
            ['name' => 'telephoto lens', 'description' => 'Optical zoom for better close up photos.'],
            ['name' => 'Battery <5000mah', 'description' => 'Has a 5000mah or greater battery.'],
            ['name' => 'benchmark', 'description' => 'Antutu(v9) score above 900,000 .'],
            ['name' => '200MP camera', 'description' => 'Main 200Mp camera to take stunning high res photos.'],
            ['name' => '120hrtz refresh rate', 'description' => 'High screen refresh rate.'],
        ]);
    }
}
