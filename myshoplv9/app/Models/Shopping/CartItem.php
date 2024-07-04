<?php

namespace App\Models\Shopping;

use App\Models\Presentable\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    public function product() {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
