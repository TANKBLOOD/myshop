<?php

namespace App\Models\Presentable;

use App\Models\Relators\Category;
use App\Models\Statistic\ProductView;
use App\Models\Presentable\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
        'product_specifications' => 'object',
    ];

    public function category()
    {
        // return $this->belongsTo(Category::class, 'category_id', 'id');
        return $this->belongsToMany(Category::class, 'category_product', 'product_id', 'category_id');
    }

    public function viewStatics()
    {
        return $this->hasMany(ProductView::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tag_product', 'product_id', 'tag_id');
    }

    public function getIsPopularAttribute()
    {
        return DB::table('popular_products')->where('product_id', $this->id)->exists();
    }

    public static function getAllWithPopularityStatus()
    {
        return self::leftJoin('popular_products', 'products.id', '=', 'popular_products.product_id')
            ->with('category') // Load the 'categories' relationship
            ->select('products.*', DB::raw('IF(popular_products.product_id IS NOT NULL, 1, 0) as is_popular'))
            ->paginate(50);
    }

    public function discountedPrice()
    {
        if ($this->discount != null && $this->discount > 0) {
            $discountAmount = ($this->discount / 100) * $this->price;
            return $this->price - $discountAmount;
        }

        return $this->price;
    }
}
