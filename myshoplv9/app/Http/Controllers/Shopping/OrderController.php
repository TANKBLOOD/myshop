<?php

namespace App\Http\Controllers\Shopping;

use App\Http\Controllers\Controller;
use App\Models\Shopping\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function adminActiveOrders()
    {
        $orders = Order::where('status', 'inProgress')->get();

        return view('Admin.order.admin-active-order-index', compact('orders'));
    }

    public function adminActiveOrdersData()
    {
        $orders = Order::where('status', 'unpayed')->orWhere('status', 'pending')->orWhere('status', 'inprogress')->get();

        return response()->json([
            'orders' => $orders,
        ]);
    }

    public function adminOrdersHistory()
    {
        $orders = Order::all();

        return view('Admin.order.admin-orders-history-index', compact('orders'));
    }

    public function adminOrdersHistoryData()
    {
        $orders = Order::all();

        return response()->json([
            'orders' => $orders,
        ]);
    }

    public function customerActiveOrders()
    {
        $customer = auth()->user()->profile->profileable; // Assuming you are using Laravel's built-in authentication
        $orders = $customer->orders()->where('status', 'inProgress')->get();

        return view('Customer.customer-active-orders', compact('orders'));
    }

    public function customerActiveOrdersData()
    {
        $customer = auth()->user()->profile->profileable; // Assuming you are using Laravel's built-in authentication
        $orders = $customer->orders()->where('status', 'unpayed')->orWhere('status', 'inprogress')->get();

        return response()->json([
            'orders' => $orders,
        ]);
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);

        return response()->json($order->load('items.element', 'items.service'));
    }

    public function changeOrderStatus(Request $request)
    {
        $order = Order::findOrFail($request->orderId);
        $order->status = $request->status;
        $order->save();

        return response()->json([
            'changed' => true,
            'orderId' => $order->id,
        ]);
    }
}
