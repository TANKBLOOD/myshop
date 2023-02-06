<?php

namespace App\Models\Relators;

use App\Models\Presentable\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table= "categories";

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function products() {
        // return $this->hasMany(Product::class, 'category_id', 'id');
        return $this->belongsToMany(Product::class, 'category_product', 'category_id', 'product_id');
    }
}
