<?php

namespace App\Http\Controllers;
use App\Models\Cart;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;

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
    Cart::where('user_id', Auth::id())->delete();

    return redirect()->route('order.success', $order->id)
        ->with('success', 'Your order has been placed successfully!');
}
    public function success($id)
        {
            $order = Order::findOrFail($id);
            return view('order_success', compact('order'));
        }
    /*show order in user dashboard*/
        public function myOrders()
        {
        $user = Auth::user();
        $orders = Order::where('user_id', $user->id)->get();

        return view('dashboard', compact('orders'));
        }
    /*view details of order in user dashboard */
        public function show($id)
        {
            $order = Order::where('id', $id)->first();

            // Fetch all items for this order
            $orderItems = OrderItem::where('order_id', $order->id)
                ->get();

            // Optional: attach product info for each item
            foreach ($orderItems as $item) {
                $product = Product::where('id', $item->product_id)->first();
                $item->product_name = $product->name;
                $item->product_image = $product->image;
                $item->product_price = $product->price; // if needed
            }

            return view('orderDetials', compact('order', 'orderItems'));
        }
/****from admin dashbard */
public function updateStatus(Request $request, Order $order)
{
    $request->validate([
        'status' => 'required|in:pending,shipping,delivery',
    ]);

    $order->status = $request->status;
    $order->save();

    return redirect()->back()->with('success', 'Order status updated successfully.');
}

public function show2($id)
        {
            $order = Order::where('id', $id)->first();

            // Fetch all items for this order
            $orderItems = OrderItem::where('order_id', $order->id)
                ->get();

            // Optional: attach product info for each item
            foreach ($orderItems as $item) {
                $product = Product::where('id', $item->product_id)->first();
                $item->product_name = $product->name;
                $item->product_image = $product->image;
                $item->product_price = $product->price; // if needed
            }

            return view('orderDetials2', compact('order', 'orderItems'));
        }

}

