<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function store(Request $request)
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
                'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            ]);

            $imagePath = null;

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('categories', 'public');
            }

            Category::create([
                'name' => $request->name,
                'description' => $request->description,
                'image' => $imagePath,
            ]);
            

            return redirect()->back()->with('success', 'Category created successfully!');
        }

// Update category
public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
    ]);

    $category = Category::findOrFail($id);
    $category->update($request->only('name', 'description'));

    return redirect()->back()->with('success', 'Category updated successfully!');

}

// Delete category
public function destroy($id)
{
    $category = Category::findOrFail($id);
    $category->delete();

    return redirect()->back()->with('success', 'Category deleted successfully!');
}
}
