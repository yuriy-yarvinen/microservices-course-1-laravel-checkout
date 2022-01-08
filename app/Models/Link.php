<?php

namespace App\Models;

use App\Product;
use App\LinkProduct;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $guarded = ['id'];

    public function products()
    {
        return $this->belongsToMany(Product::class, LinkProduct::class);
    }
}
