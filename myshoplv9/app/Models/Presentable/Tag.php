<?php

namespace App\Models\Presentable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Presentable\Product;

class Tag extends Model
{
    use HasFactory;

    public function products() {
        return $this->belongsToMany(Product::class, 'tag_product', 'tag_id', 'product_id');
    }
}
