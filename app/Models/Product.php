<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'price',
        'original_price',
        'discount_percentage',  // New discount field
        'rating',
        'review_count',
        'is_hot',
        'brand_id',
        'category_id',
        'description',
        'specifications',
        'in_stock',
    ];

    protected $casts = [
        'price' => 'float',
        'original_price' => 'float',
        'discount_percentage' => 'integer',
        'rating' => 'integer',
        'review_count' => 'integer',
        'is_hot' => 'boolean',
        'in_stock' => 'boolean',
        'specifications' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // public function brand()
    // {
    //     return $this->belongsTo(Brand::class);
    // }

    /**
     * Get the final price after applying discount
     * 
     * @return float
     */
    public function getFinalPriceAttribute()
    {
        if ($this->discount_percentage > 0) {
            return $this->price * (100 - $this->discount_percentage) / 100;
        }
        
        return $this->price;
    }
    public function scopeOnSale($query)
    {
        return $query->where(function($query) {
            $query->where('discount_percentage', '>', 0)
                  ->orWhereNotNull('original_price');
        });
    }
}