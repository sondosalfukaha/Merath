<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

    $categories = Category::all(); // fetch all categories
    $products = Product::all(); // fetch all categories

    return view('admin.dashboard', compact('categories','products'));
    }
}
