<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = 'portfolios';

    protected $fillable = [
        'title',
        'category_id',
        'image',
        'media_url',
        'description',
    ];

    public function category()
    {
        return $this->belongsTo(PortfolioCategory::class, 'category_id');
    }

    public function getIsVideoAttribute()
    {
        return !empty($this->media_url);
    }

    public function getPopupUrlAttribute()
    {
        return $this->is_video ? $this->media_url : asset('storage/' . $this->image);
    }

    public function getThumbnailAttribute()
    {
        if ($this->is_video && !$this->image) {
            return asset('images/videoplaceholder.jpg');
        }
        return $this->image ? asset('storage/' . $this->image) : asset('images/photo03b.jpg');
    }
}
