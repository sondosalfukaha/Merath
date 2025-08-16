<?php

namespace App\Http\Controllers;
use App\Models\Cart;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;


class OrderController extends Controller
{
public function checkout()
{
    $cartItems = Cart::with('product')
        ->where('user_id', Auth::id())
        ->get();

    $total = $cartItems->sum(fn($item) => $item->product->price * $item->quantity);

    return view('order', compact('cartItems','total'));
}
    public function placeOrder(Request $request)
{
    $cartItems = Cart::with('product')->where('user_id', Auth::id())->get();

    if ($cartItems->isEmpty()) {
        return redirect()->route('cart.index')->with('error','Cart is empty');
    }

    $total = $cartItems->sum(fn($item) => $item->product->price * $item->quantity);

    // ✅ create order header
    $order = Order::create([
        'user_id' => Auth::id(),
        'order_number' => 'ORD-' . time(),
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'address' => $request->address,
        'total_amount' => $total,
        'status' => 'pending'
    ]);

    // ✅ create order details
    foreach ($cartItems as $item) {
        OrderItem::create([
            'order_id' => $order->id,
            'user_id' => Auth::id(),
            'product_id' => $item->product_id,
            'price' => $item->product->price,
            'quantity' => $item->quantity,
        ]);
    }

    // ✅ clear cart after placing order
    //Cart::where('user_id', Auth::id())->delete();

    return redirect()->route('order.success', $order->id)
        ->with('success', 'Your order has been placed successfully!');
}
public function success($id)
    {
        $order = Order::findOrFail($id);
        return view('order_success', compact('order'));
    }
public function myOrders()
    {
        $user = Auth::user();
        $orders = Order::where('user_id', $user->id)->get();

        return view('dashboard', compact('orders'));
    }

}

