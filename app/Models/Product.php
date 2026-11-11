<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'category',
        'tagline',
        'description',
        'price',
        'original_price',
        'piece_count',
        'size',
        'shelf_life',
        'holding_time',
        'flavor',
        'image',
        'is_bestseller',
        'is_featured',
        'in_stock',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'original_price' => 'decimal:2',
        'is_bestseller' => 'boolean',
        'is_featured' => 'boolean',
        'in_stock' => 'boolean',
    ];
}
