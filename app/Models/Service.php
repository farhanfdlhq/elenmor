<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = [
        'title',
        'includes',
        'price',
        'price_unit',
        'icon',
        'is_active',
    ];

    protected $casts = [
        'includes' => 'array', // Cast kolom JSON ke array
        'is_active' => 'boolean', // Otomatis konversi nilai ke boolean
    ];
}
