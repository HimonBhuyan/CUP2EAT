<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'name',
        'phone',
        'email',
        'city',
        'business_type',
        'volume_needed',
        'flavor_interest',
        'message',
        'status',
        'admin_notes',
    ];
}

