<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // Show Cart
    public function index()
    {
        $cartItems = Cart::where('user_id', Auth::id())->get();
        // eager load product info
        foreach ($cartItems as $item) {
            $item->product = Product::find($item->product_id);
        }

        return view('cart', compact('cartItems'));
    }

    // Add to Cart
    public function add2(Request $request)
    {
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'Please login to add to cart');
        }

        $cartItem = Cart::where('user_id', Auth::id())
                        ->where('product_id', $request->product_id)
                        ->first();

        if ($cartItem) {
            $cartItem->quantity += 1;
            $cartItem->save();
        } else {
            Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $request->product_id,
                'quantity' => 1
            ]);
        }

        return back()->with('success', 'Product added to cart!');
    }

    // Remove single item
    public function remove($id)
    {
        Cart::where('id', $id)->delete();
        return back()->with('success', 'Item removed from cart');
    }

    // Clear entire cart
    public function clear()
    {
        Cart::where('user_id', Auth::id())->delete();
        return back()->with('success', 'Cart cleared');
    }
 public function add($productId)
{
    try {
        $cart = Cart::where('user_id', auth()->id())->where('product_id', $productId)->first();

        if ($cart) {
            $cart->quantity += 1;
            $cart->save();
        } else {
            Cart::create([
                'user_id' => auth()->id(),
                'product_id' => $productId,
                'quantity' => 1
            ]);
        }

        $cartCount = Cart::where('user_id', auth()->id())->sum('quantity');

        return response()->json([
            'success' => true,
            'cartCount' => $cartCount
        ]);

    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => $e->getMessage()
        ], 500);
    }
}
/*
public function updateQuantity(Request $request, $id)
{
    $cartItem = Cart::findOrFail($id);

    if($request->action === 'increase') {
        $cartItem->quantity += 1;
    } elseif($request->action === 'decrease' && $cartItem->quantity > 1) {
        $cartItem->quantity -= 1;
    }

    $cartItem->save();

    // Calculate subtotal
    $subtotal = $cartItem->quantity * $cartItem->product->price;

    // Calculate total for user
    $total = Cart::where('user_id', auth()->id())
        ->get()
        ->sum(fn($item) => $item->quantity * $item->product->price);

    return response()->json([
        'success' => true,
        'newQuantity' => $cartItem->quantity,
        'subtotal' => $subtotal,
        'total' => $total
    ]);
}
*/

public function updateQuantity(Request $request, $id)
{
    $cartItem = Cart::with('product')->findOrFail($id); // eager load product

    if ($request->action === 'increase') {
        // ✅ check stock
        if ($cartItem->quantity < $cartItem->product->stock) {
            $cartItem->quantity += 1;
            $cartItem->save();
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Stock limit reached'
            ], 400);
        }
    } elseif ($request->action === 'decrease') {
        if ($cartItem->quantity > 1) {
            $cartItem->quantity -= 1;
            $cartItem->save();
        } else {
            // ✅ remove item if qty = 1 and user decreases
            $cartItem->delete();

            $total = Cart::where('user_id', auth()->id())
                ->get()
                ->sum(fn($item) => $item->quantity * $item->product->price);

            return response()->json([
                'success' => true,
                'removed' => true,
                'total' => $total
            ]);
        }
    }

    // Calculate subtotal
    $subtotal = $cartItem->quantity * $cartItem->product->price;

    // Calculate total
    $total = Cart::where('user_id', auth()->id())
        ->get()
        ->sum(fn($item) => $item->quantity * $item->product->price);
    $totalQty = Cart::where('user_id', auth()->id())->sum('quantity');
    return response()->json([
        'success' => true,
        'removed' => false,
        'newQuantity' => $cartItem->quantity,
        'subtotal' => $subtotal,
        'total' => $total,
        'totalQty' => $totalQty,
    ]);
}


}
