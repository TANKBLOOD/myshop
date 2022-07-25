<?php

namespace App\Models\Presentable;

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
    ];
}
