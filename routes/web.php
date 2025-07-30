<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Models\Category;
use App\Http\Controllers\Admin\ProductController;
use App\Models\Product;

Route::get('/', function () {
    $categories = Category::all(); // fetch all categories from the DB

    //$products = Product::take(6)->get(); // limit to 6 items
    $products = Product::inRandomOrder()->take(6)->get();
    $featuredProducts = Product::where('is_featured', true)->inRandomOrder()->take(3)->get();

    $bestSellers = Product::where('is_best_seller', true)->inRandomOrder()->take(6)->get();
    return view('welcome', compact('categories','products','featuredProducts', 'bestSellers'));
});

Route::get('/shop', function () {
        return view('shop');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});
Route::get('/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
Route::post('/categories', [CategoryController::class, 'store'])->name('admin.categories.store');

require __DIR__.'/auth.php';

Route::get('admin/dashboard',[HomeController::class,'index'])->middleware(['auth','admin']);

Route::prefix('admin')->group(function () {
    Route::resource('categories', CategoryController::class);
});
Route::get('admin/dashboard', [HomeController::class, 'index'])
    ->middleware(['auth', 'admin'])
    ->name('admin.dashboard');



Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::resource('products', ProductController::class);
});

Route::get('admin/dashboard', [ProductController::class, 'dashboard'])->middleware(['auth', 'admin'])->name('admin.dashboard');

Route::post('admin/products', [ProductController::class, 'store'])->name('admin.products.store');
Route::put('admin/products/{id}', [ProductController::class, 'update'])->name('admin.products.update');
Route::delete('admin/products/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
Route::put('admin/products/{product}', [ProductController::class, 'update'])->name('products.update');
