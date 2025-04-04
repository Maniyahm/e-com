<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'name' => 'Fashion live',
                'description' => 'Latest fashion trends and styles',
                'website' => 'https://fashionlive.example.com',
                'is_featured' => true,
            ],
            [
                'name' => 'Hand crafted',
                'description' => 'Artisanal handmade products',
                'website' => 'https://handcrafted.example.com',
                'is_featured' => false,
            ],
            [
                'name' => 'Meafronic',
                'description' => 'Electronic and tech accessories',
                'website' => 'https://meafronic.example.com',
                'is_featured' => false,
            ],
            [
                'name' => 'Sunshine',
                'description' => 'Bright and colorful lifestyle products',
                'website' => 'https://sunshine.example.com',
                'is_featured' => true,
            ],
            [
                'name' => 'Pure',
                'description' => 'Natural and organic products',
                'website' => 'https://pure.example.com',
                'is_featured' => false,
            ],
            [
                'name' => 'Airfold',
                'description' => 'Lightweight and portable products',
                'website' => 'https://airfold.example.com',
                'is_featured' => false,
            ],
            [
                'name' => 'Nikon',
                'description' => 'Professional cameras and equipment',
                'website' => 'https://nikon.example.com',
                'is_featured' => true,
            ],
            [
                'name' => 'NYX',
                'description' => 'Professional makeup products',
                'website' => 'https://nyx.example.com',
                'is_featured' => true,
            ],
            [
                'name' => 'Barber Care',
                'description' => 'Professional hair and beard grooming',
                'website' => 'https://barbercare.example.com',
                'is_featured' => false,
            ],
        ];

        foreach ($brands as $brand) {
            Brand::create([
                'name' => $brand['name'],
                'slug' => Str::slug($brand['name']),
                'description' => $brand['description'],
                'website' => $brand['website'],
                'is_featured' => $brand['is_featured'],
            ]);
        }
    }
}
