<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model
{
    protected $table = 'portfolio_categories';

    protected $fillable = ['name'];

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class, 'category_id');
    }

    public function getPortfolioCountAttribute()
    {
        return $this->portfolios->count();
    }
}
