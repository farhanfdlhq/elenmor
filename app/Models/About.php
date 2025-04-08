<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'abouts';

    protected $fillable = [
        'title',
        'description',
        'image',
        'email',
        'social_media',
        'bio',
    ];

    protected $casts = [
        'social_media' => 'array', // Cast JSON ke array untuk kemudahan akses
    ];
}
