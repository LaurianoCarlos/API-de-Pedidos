<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
    $orders = Order::with('orderItems')->get();

    return response()->json($orders);
    }


    public function store(Request $request)
    {
        $order = new Order;
        $order->user_id = $request->input('user_id');
        $order->total = $request->input('total');
        $order->save();

        // Save order items

        return response()->json($order, 201);
    }

    public function show($id)
{
    $order = Order::with('orderItems')->find($id);

    if (!$order) {
        return response()->json(['error' => 'Order not found'], 404);
    }

    return response()->json($order);
}

    public function update(Request $request, $id)
    {
        $order = Order::find($id);

        if (!$order) {
            return response()->json(['error' => 'Order not found'], 404);
        }

        $order->customer_name = $request->input('customer_name');
        $order->customer_email = $request->input('customer_email');
        $order->total_price = $request->input('total_price');
        $order->save();

        // Update order items

        return response()->json($order);
    }

    public function destroy($id)
    {
        $order = Order::find($id);

        if (!$order) {
            return response()->json(['error' => 'Order not found'], 404);
        }

        // Delete order items

        $order->delete();

        return response()->json(['message' => 'Order deleted']);
    }
}
