<?php

namespace App\Models\Shopping;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Shopping\CartItem;
use App\Models\User;

class Cart extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function items()
    {
        return $this->hasMany(CartItem::class);
    }

    public function addItem($productId)
    {
        if ($item = $this->items->where('product_id', $productId)->first()) {
            $item->quantity = $item->quantity + 1;
            $item->save();

            return $item->id;
        } else {
            $newItem = new CartItem;
            $newItem->product_id = $productId;
            $newItem->quantity = 1;
            $newItem->cart_id = $this->id;

            $newItem->save();

            return $newItem->id;
        }
    }

    public function removeItem($productId)
    {
        $item = $this->items->where('product_id', $productId)->first();
        if ($item && $item->quantity > 1) {
            $item->quantity = $item->quantity - 1;
            $item->save();

            return $item->id;
        } else {
            $item = $this->items->where('product_id', $productId)->first();
            if ($item) {
                $item->delete();
            }

            return 0;
        }
    }

    public function checkProductExists($productId)
    {
        $item= $this->items->where('product_id', $productId)->first();
        if($item) {
            return $item->quantity;
        } else {
            return false;
        }
    }

    public function getSummary() {
        $totalPrice = 0;
        $totalDiscount = 0;
        $productsSummary = array();
        $cartItems = $this->items()->with('product')->get();

        foreach($cartItems as $item) {
            $totalPrice += ($item->product->price - ($item->product->price * $item->product->discount / 100) ) * $item->quantity; // Assuming $item->price is the unit price
            $totalDiscount += ($item->product->price * $item->product->discount / 100) * $item->quantity; // Assuming discount applies to each unit
            array_push($productsSummary, [
                'name' => $item->product->title,
                'price' => ($item->product->price - ($item->product->price * $item->product->discount / 100) ) * $item->quantity,
                'count' => $item->quantity,
            ]);
        }

        return [
            'totalPrice' => $totalPrice,
            'totalDiscount' => $totalDiscount,
            'productsSummary' => $productsSummary,
        ];
    }
}
