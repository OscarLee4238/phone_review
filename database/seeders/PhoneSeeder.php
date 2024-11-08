<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Phone;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = now();  
            Phone::insert([
                [
                    'model' => 'iPhone 16 Pro Max',
                    'description' => 'The newest phone from Apple',
                    'release_year' => 2024,
                    'price' => 1199.00,
                    'image' => 'iphone_16_pro_max.jpg',
                    'brand' => 'Apple',
                    'created_at' => $currentTimestamp,
                    'updated_at' => $currentTimestamp
                ],
                [
                    'model' => 'Galaxy s24 ultra',
                    'description' => 'The newest phone from Samsung',
                    'release_year' => 2024,
                    'price' => 895.56,
                    'image' => 'galaxy_s24_ultra.jpg',
                    'brand' => 'Samsung',
                    'created_at' => $currentTimestamp,
                    'updated_at' => $currentTimestamp
                ],
                [
                    'model' => 'Google pixel 9 pro',
                    'description' => 'The newest phone from Google',
                    'release_year' => 2024,
                    'price' => 1119.00,
                    'image' => 'pixel_9_pro.jpg',
                    'brand' => 'Google',
                    'created_at' => $currentTimestamp,
                    'updated_at' => $currentTimestamp
                ],
            ]);
    }
}
