<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Cart;
class WishlistController extends Controller
{
    public function add2($product_id)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login to add to wishlist.');
        }

        // Prevent duplicate entries
        $exists = Wishlist::where('user_id', Auth::id())
                    ->where('product_id', $product_id)
                    ->exists();

        if (!$exists) {
            Wishlist::create([
                'user_id' => Auth::id(),
                'product_id' => $product_id
            ]);
        }

        return redirect()->back()->with('success', 'Added to wishlist.');
    }

    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $wishlists = Wishlist::where('user_id', Auth::id())->get();
        $products = Product::all();//test//
        $cartItems = auth()->check()
        ? \App\Models\Cart::where('user_id', auth()->id())->get()
        : collect(); // empty collection if not logged in
        // ✅ Get wishlist count for logged-in user
    $wishlist_count = 0;
    if (auth()->check()) {
        $wishlist_count = \App\Models\Wishlist::where('user_id', auth()->id())->count();
    }
        return view('wishlist', compact('wishlists','products','cartItems'));//products - > test
    }

    public function remove($id)
    {
        $wishlist = Wishlist::where('id', $id)
                    ->where('user_id', Auth::id())
                    ->first();

        if ($wishlist) {
            $wishlist->delete();
        }

        return redirect()->back()->with('success', 'Removed from wishlist.');
    }
    public function clearAll()
{
    Wishlist::where('user_id', Auth::id())->delete();

    return redirect()->back()->with('success', 'All items removed from wishlist.');
}
public function moveFromCart($productId)
    {
        $userId = auth()->id();

        // Check if product already in wishlist
        $exists = Wishlist::where('user_id', $userId)
            ->where('product_id', $productId)
            ->first();

        if (!$exists) {
            Wishlist::create([
                'user_id' => $userId,
                'product_id' => $productId,
            ]);
        }

        // Remove from cart
        Cart::where('user_id', $userId)
            ->where('product_id', $productId)
            ->delete();

        return back()->with('success', 'Product moved to wishlist.');
    }
    public function addWishlist(Product $product)
{
    if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login to add to wishlist.');
        }

        // Prevent duplicate entries
        $exists = Wishlist::where('user_id', Auth::id())
                    ->where('product_id', $product_id)
                    ->exists();

        if (!$exists) {
            Wishlist::create([
                'user_id' => Auth::id(),
                'product_id' => $product_id
            ]);
        }
$wishlists = Wishlist::where('user_id', Auth::id())->get();
    return response()->json([
        'message' => $product->name . ' added to wishlist!',
        'wishlistCount' => $wishlists,
    ]);
}
 public function add(Request $request)
{
    $userId = auth()->id();
    $productId = $request->product_id;

    // Check if the item already exists in the wishlist
    $exists = Wishlist::where('user_id', $userId)
                      ->where('product_id', $productId)
                      ->exists();

    if (!$exists) {
        Wishlist::create([
            'user_id' => $userId,
            'product_id' => $productId,
        ]);

        $message = 'Item added to wishlist!';
    } else {
        $message = 'Item already in wishlist!';
    }

    $wishlist_count = Wishlist::where('user_id', $userId)->count();

    // Return JSON for JS
    return response()->json([
        'success' => true,
        'message' => $message,
        'wishlist_count' => $wishlist_count,
    ]);
}

}


