<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function dashboard()
    {
        $products = Product::with('category')->get();
        $categories = Category::all();
        $totalProducts = Product::count();
        return view('Admin.dashboard', compact('products', 'categories','totalProducts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'nullable|image|max:2048',


        ]);


        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }


        Product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'stock' => $request->stock,
            'image' => $imagePath,
            'is_featured' => $request->has('is_featured'),
            'is_best_seller' => $request->has('is_best_seller'),
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Product added successfully.');
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $product->image = $imagePath;
        }
 // Update basic info
    $product->name = $request->name;
    $product->category_id = $request->category_id;
    $product->price = $request->price;
    $product->stock = $request->stock;

    // Update flags
    $product->is_featured = $request->has('is_featured');
    $product->is_best_seller = $request->has('is_best_seller');

    $product->save();
        return redirect()->route('admin.dashboard')->with('info', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('admin.dashboard')->with('error', 'Product Deleted.');
    }
}
