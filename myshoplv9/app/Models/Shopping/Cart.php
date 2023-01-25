<?php

namespace App\Models\Shopping;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Shopping\CartItem;
use App\Models\User;

class Cart extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function items() {
        return $this->hasMany(CartImte::class);
    }

    public function addItem($productId) {
        if($item= $this->items->where('product_id', $productId)->first()) {
            $item->quantity= $item->quantity + 1;
            $item->save();

            return $item->id;
        }else {
            $newItem= new CartItem;
            $newItem->product_id= $productId;
            $newItem->quantity= 1;
            $newItem->cart_id= $this->id;

            $newItem->save();

            return $newItem->id;
        }
    }

    public function removeItem($productId) {
        if($item= $this->items->where('product_id', $productId)->first() && $item->quantity > 1) {
            $item->quantity= $item->quantity - 1;
            $item->save();

            return $item->id;
        }else {
            $item= $this->items->where('product_id', $productId)->delete();

            return 0;
        }
    }
}
