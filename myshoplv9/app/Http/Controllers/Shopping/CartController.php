<?php

namespace App\Http\Controllers\Shopping;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shopping\Cart;
class CartController extends Controller
{
    //
    public function cartInfo(Request $request) {
        $userCart= $request->user()->cart;
        $userCartItems= $userCart->items;

       return response()->json([
            'userCart'=> $userCart,
            'userCartItems'=> $userCartItems,
       ], 200, $headers);
    }

    public function addToCart(Request $request) {
        $userCart= $request->user()->cart;
        $itemId= $userCart->addItem($productId);

        return response()->json([
            'itemId'=> $itemId,
        ], 200);
    }

    public function removeFromCart(Request $request) {
        $userCart= $request->user()->cart;
        $itemId= $userCart->removeItem($productId);

        return response()->json([
            'itemId'=> $itemId,
        ], 200);
    }
}
