<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'name',
        'short_description',
        'image',
        'image_alt',

        // Pricing
        'pricing_type',
        'price',
        'duration',
        'base_duration',
        'base_price',
        'increment_minutes',
        'increment_price',
        'max_duration',

        'details',
        'status',
        'order',
    ];
}