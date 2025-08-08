<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ShopController extends Controller
{
    public function index()
    {
        // Fetch all products, optionally with pagination
        $products = Product::where('stock', '>', 0)->with('category')->get();
        //$products = Product::all(); // or any filtered query
        $categories = Category::all(); // fetch all categories from the DB


        return view('shop', compact('products','categories'));
    }
}
