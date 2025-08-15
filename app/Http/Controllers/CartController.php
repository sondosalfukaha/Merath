<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product; // assuming you have Product model
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
    public function add(Request $request)
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
}
