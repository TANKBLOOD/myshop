<?php

namespace App\Models\Presentable;

use App\Models\Relators\Category;
use App\Models\Statistic\ProductView;
use App\Models\Presentable\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //changing the key from id to slug
    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $casts = [
        'images' => 'array',
        'product_specifications'=> 'object',
    ];

    public function category() {
        // return $this->belongsTo(Category::class, 'category_id', 'id');
        return $this->belongsToMany(Category::class, 'category_product', 'product_id', 'category_id');
    }

    public function viewStatics() {
        return $this->hasMany(ProductView::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, 'tag_product', 'product_id', 'tag_id');
    }
}
