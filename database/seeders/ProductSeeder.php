<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample products with discount_percentage added
        $products = [
            [
                'title' => 'Kellogg\'s Coco Pops Cereal',
                'image' => '/images/products/coco-pops.jpg',
                'price' => 213.00,
                'original_price' => null,
                'discount_percentage' => 15, // Added discount
                'rating' => 4,
                'review_count' => 8,
                'is_hot' => false,
                'category_id' => 1,
                'brand_id' => 1,
                'description' => 'Delicious chocolate flavored rice cereal that turns milk into chocolate milk.',
                'specifications' => json_encode([
                    'Weight' => '375g',
                    'Type' => 'Breakfast Cereal',
                    'Dietary' => 'Vegetarian'
                ]),
                'in_stock' => true,
            ],
            [
                'title' => 'Iceland 3 Solo Exotic Burst',
                'image' => '/images/products/iceland-burst.jpg',
                'price' => 431.52,
                'original_price' => 490.00,
                'discount_percentage' => 0, // Using original_price for discount calculation
                'rating' => 3,
                'review_count' => 6,
                'is_hot' => false,
                'category_id' => 2,
                'brand_id' => 2,
                'description' => 'Refreshing exotic fruit flavored ice cream.',
                'specifications' => json_encode([
                    'Weight' => '300ml',
                    'Type' => 'Ice Cream',
                    'Storage' => 'Keep Frozen'
                ]),
                'in_stock' => true,
            ],
            [
                'title' => 'Miko The Panda Water Bottle',
                'image' => '/images/products/panda-bottle.jpg',
                'price' => 380.00,
                'original_price' => null,
                'discount_percentage' => 0,
                'rating' => 5,
                'review_count' => 4,
                'is_hot' => false,
                'category_id' => 3,
                'brand_id' => 3,
                'description' => 'Cute panda-shaped water bottle, perfect for kids.',
                'specifications' => json_encode([
                    'Capacity' => '500ml',
                    'Material' => 'BPA-free plastic',
                    'Dishwasher Safe' => 'Yes'
                ]),
                'in_stock' => true,
            ],
            [
                'title' => 'Sesame Seed Bread',
                'image' => '/images/products/bread.jpg',
                'price' => 204.00,
                'original_price' => null,
                'discount_percentage' => 10, // Added discount
                'rating' => 4,
                'review_count' => 8,
                'is_hot' => false,
                'category_id' => 4,
                'brand_id' => 4,
                'description' => 'Freshly baked bread topped with sesame seeds.',
                'specifications' => json_encode([
                    'Weight' => '800g',
                    'Type' => 'Bread',
                    'Contains' => 'Gluten, Sesame'
                ]),
                'in_stock' => true,
            ],
            [
                'title' => 'Maxwell House Classic Roast',
                'image' => '/images/products/coffee.jpg',
                'price' => 471.00,
                'original_price' => null,
                'discount_percentage' => 0,
                'rating' => 3,
                'review_count' => 7,
                'is_hot' => false,
                'category_id' => 5,
                'brand_id' => 5,
                'description' => 'Medium roast ground coffee for a rich, full-bodied taste.',
                'specifications' => json_encode([
                    'Weight' => '250g',
                    'Type' => 'Ground Coffee',
                    'Roast' => 'Medium'
                ]),
                'in_stock' => true,
            ],
            [
                'title' => 'Bottled Pure Water 500ml',
                'image' => '/images/products/water.jpg',
                'price' => 411.84,
                'original_price' => 468.00,
                'discount_percentage' => 12, // Added combined discount
                'rating' => 4,
                'review_count' => 5,
                'is_hot' => true,
                'category_id' => 3,
                'brand_id' => 6,
                'description' => 'Pure natural spring water in a convenient bottle.',
                'specifications' => json_encode([
                    'Volume' => '500ml',
                    'Type' => 'Spring Water',
                    'pH Level' => '7.2'
                ]),
                'in_stock' => true,
            ],
            [
                'title' => 'Iceland 6 Hot Cross Buns',
                'image' => '/images/products/hot-cross-buns.jpg',
                'price' => 383.00,
                'original_price' => null,
                'discount_percentage' => 0,
                'rating' => 4,
                'review_count' => 8,
                'is_hot' => false,
                'category_id' => 4,
                'brand_id' => 2,
                'description' => 'Traditional hot cross buns with spices and dried fruit.',
                'specifications' => json_encode([
                    'Pack Size' => '6 buns',
                    'Weight' => '400g',
                    'Contains' => 'Gluten, Milk, Eggs'
                ]),
                'in_stock' => true,
            ],
            [
                'title' => 'Nikon HD Camera',
                'image' => '/images/products/camera.jpg',
                'price' => 230.10,
                'original_price' => 295.00,
                'discount_percentage' => 22, // Added combined discount
                'rating' => 4,
                'review_count' => 7,
                'is_hot' => false,
                'category_id' => 6,
                'brand_id' => 7,
                'description' => 'High-definition digital camera for professional photography.',
                'specifications' => json_encode([
                    'Resolution' => '24.2MP',
                    'Zoom' => '3x Optical',
                    'Storage' => 'SD Card'
                ]),
                'in_stock' => true,
            ],
            [
                'title' => 'NYX Beauty Couton Palette Makeup',
                'image' => '/images/products/makeup.jpg',
                'price' => 302.00,
                'original_price' => null,
                'discount_percentage' => 25, // Added discount
                'rating' => 5,
                'review_count' => 8,
                'is_hot' => false,
                'category_id' => 7,
                'brand_id' => 8,
                'description' => 'Professional makeup palette with a range of beautiful colors.',
                'specifications' => json_encode([
                    'Palette Size' => '12 colors',
                    'Type' => 'Eyeshadow',
                    'Finish' => 'Matte and Shimmer'
                ]),
                'in_stock' => true,
            ],
            [
                'title' => 'Barber Care Hair Kit For Beard',
                'image' => '/images/products/barber-kit.jpg',
                'price' => 304.41,
                'original_price' => 419.00,
                'discount_percentage' => 0, // Using original_price for discount calculation
                'rating' => 3,
                'review_count' => 6,
                'is_hot' => false,
                'category_id' => 8,
                'brand_id' => 9,
                'description' => 'Complete kit for beard grooming and maintenance.',
                'specifications' => json_encode([
                    'Contents' => 'Scissors, Comb, Oil, Balm',
                    'Case' => 'Leather Pouch',
                    'Usage' => 'Daily Grooming'
                ]),
                'in_stock' => true,
            ],
        ];

        foreach ($products as $product) {
            Product::create([
                'title' => $product['title'],
                'slug' => Str::slug($product['title']),
                'image' => $product['image'],
                'price' => $product['price'],
                'original_price' => $product['original_price'],
                'discount_percentage' => $product['discount_percentage'],
                'rating' => $product['rating'],
                'review_count' => $product['review_count'],
                'is_hot' => $product['is_hot'],
                'category_id' => $product['category_id'],
                'brand_id' => $product['brand_id'],
                'description' => $product['description'],
                'specifications' => $product['specifications'],
                'in_stock' => $product['in_stock'],
            ]);
        }
    }
}
