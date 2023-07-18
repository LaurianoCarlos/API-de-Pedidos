<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrderItem;


class OrderItemController extends Controller
{

 
    public function store(Request $request)
    {
        $order_item = new OrderItem;
        $order_item->order_id = $request->input('order_id');
        $order_item->product_id = $request->input('product_id');
        $order_item->quantity = $request->input('quantity');
        $order_item->price = $request->input('price');
        $order_item->save();

        return response()->json($order_item, 201);
    }

    public function update(Request $request, $id)
    {
        $order_item = OrderItem::find($id);

        if (!$order_item) {
            return response()->json(['error' => 'Order item not found'], 404);
        }

        $order_item->order_id = $request->input('order_id');
        $order_item->product_id = $request->input('product_id');
        $order_item->quantity = $request->input('quantity');
        $order_item->price = $request->input('price');
        $order_item->save();

        return response()->json($order_item);
    }

    public function destroy($id)
    {
        $order_item = OrderItem::find($id);

        if (!$order_item) {
            return response()->json(['error' => 'Order item not found'], 404);
        }

        $order_item->delete();

        return response()->json(['message' => 'Order item deleted']);
    }
}
