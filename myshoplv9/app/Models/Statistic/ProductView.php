<?php

namespace App\Models\Statistic;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Presentable\Product;
class ProductView extends Model
{
    use HasFactory;

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
