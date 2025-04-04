<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

/**
 * Run the database seeds.
 */
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Pro Glasses',
                // 'description' => 'Professional grade eyewear for all occasions',
                // 'is_active' => true,
            ],
            [
                'name' => 'Casual Shoes',
                // 'description' => 'Comfortable shoes for everyday wear',
                // 'is_active' => true,
            ],
            [
                'name' => 'Gift Sets',
                // 'description' => 'Perfect presents for any occasion',
                // 'is_active' => true,
            ],
            [
                'name' => 'Plastic Gifts',
                // 'description' => 'Durable plastic gift items',
                // 'is_active' => true,
            ],
            [
                'name' => 'Handy Cream',
                // 'description' => 'Moisturizing hand creams and lotions',
                // 'is_active' => true,
            ],
            [
                'name' => 'Cosmetics',
                // 'description' => 'Beauty products for face and body',
                // 'is_active' => true,
            ],
            [
                'name' => 'Silk Accessories',
                // 'description' => 'Luxurious silk accessories for all occasions',
                // 'is_active' => true,
            ],
            [
                'name' => 'Finest Skincare Lotions',
                // 'description' => 'Premium skincare for face and body',
                // 'is_active' => true,
            ],
            [
                'name' => 'Bags & Purses',
                // 'description' => 'Stylish bags and purses for every need',
                // 'is_active' => true,
            ],
            [
                'name' => 'Sunglasses',
                // 'description' => 'Protective and stylish eyewear for the sun',
                // 'is_active' => true,
            ],
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
                'slug' => Str::slug($category['name']),
                // 'description' => $category['description'],
                // 'is_active' => $category['is_active'],
            ]);
        }
    }
}
