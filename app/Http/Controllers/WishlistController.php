<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{public function add($product_id)
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

        return view('wishlist', compact('wishlists'));
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
}

