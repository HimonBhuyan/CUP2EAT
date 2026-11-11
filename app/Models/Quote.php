<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'quote_number',
        'customer_name',
        'phone',
        'email',
        'city',
        'business_type',
        'items_json',
        'total_cups',
        'estimated_total',
        'notes',
        'status',
    ];

    protected $casts = [
        'items_json' => 'array',
        'estimated_total' => 'decimal:2',
    ];
}
