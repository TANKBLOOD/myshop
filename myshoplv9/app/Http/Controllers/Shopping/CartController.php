<?php

namespace App\Http\Controllers\Shopping;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shopping\Cart;
use App\Models\Shopping\Order;
use App\Models\Shopping\OrderItem;

class CartController extends Controller
{
    //
    public function customerCartPage(Request $request) {

        return view('shop.cart.customer-cart');
    }

    public function cartInfo(Request $request) {
        $userCart= $request->user()->cart;
        $userCartItems= $userCart->items()->with('product')->get();

       return response()->json([
            'userCart'=> $userCart,
            'userCartItems'=> $userCartItems,
            'success'=> true,
       ], 200);
    }

    public function addToCart(Request $request) {
        $userCart= $request->user()->cart;
        $itemId= $userCart->addItem($request->productId);

        return response()->json([
            'itemId'=> $itemId,
        ], 200);
    }

    public function removeFromCart(Request $request) {
        $userCart= $request->user()->cart;
        $itemId= $userCart->removeItem($request->productId);

        return response()->json([
            'itemId'=> $itemId,
        ], 200);
    }

    public function checkout() {
        // Get the current user's cart
        $userCart = auth()->user()->profile->profileable->cart;

        // Create an order
        $order = new Order();
        $order->customer_id = auth()->user()->profile->profileable->id;
        $order->status = 'unpayed'; // You can change the default status if needed
        $order->save();

        // Loop through the cart items and create order items
        foreach ($userCart->items as $cartItem) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->element_id = $cartItem->element_id;
            $orderItem->service_id = $cartItem->service_id;
            $orderItem->quantity = $cartItem->quantity;

            // Calculate the price for the order item
            $servicePrice = $cartItem->service->price;
            $orderItem->price = $servicePrice * $cartItem->quantity;

            $orderItem->save();
        }

        // Optionally, you can clear the user's cart after creating the order
        $userCart->items()->delete();
        // $userCart->delete();

        // Redirect the user to a confirmation page or do any other necessary actions
        return response()->json([
            'checkedout' => true,
        ]);
    }

    public function getProductCountInUserCart (Request $request) {

        $userCart = auth()->user()->cart;
        $productId= $request->product_id;

        $productCount= $userCart->checkProductExists($productId);

        return response()->json([
            'productCount'=> $productCount,
        ]);
    }

    public function checkoutCartPage () {
        $cartSummery= auth()->user()->cart->getSummary();

        return view('shop.cart.checkout', [
            'summary'=> $cartSummery,
        ]);
    }
}
