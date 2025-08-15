<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;

class ShopController extends Controller
{
    public function index()
    {

        $products = Product::where('stock', '>', 0)->with('category')->get();
        //$products = Product::all(); // or any filtered query
        $categories = Category::all(); // fetch all categories from the DB
            $cartItems = auth()->check()
        ? \App\Models\Cart::where('user_id', auth()->id())->get()
        : collect(); // empty collection if not logged in

        return view('shop', compact('products','categories','cartItems'));
    }
}
