<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Order;
use App\Models\OrderItems;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function addOrder()
    {
        $basket = Basket::where('user_id', auth()->id())->get();
        $total = 0;
        foreach ($basket as $item) {
            foreach ($basket as $item) {
                $total += $item->product->price * $item->quantity;
            }
            $order = Order::create([
                'user_id' => auth()->id(),
                'total_price' => $total,
            ]);

            foreach ($basket as $item) {
                OrderItems::create(
                    [
                        'order_id' => $order->id,
                        'product_id' => $item->product_id,
                        'quantity' => $item->quantity,
                    ]
                );
                $item->delete();

            }
            return redirect()->route('index.view');
        }
    }

    public function adminStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->status = $request->status;
        $order->save();
    return redirect()->back();
    }
}
