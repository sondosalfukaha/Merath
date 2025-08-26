<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Models\Category;
use App\Http\Controllers\Admin\ProductController;
use App\Models\Product;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\WishlistController;
use App\Models\Wishlist;
use App\Http\Controllers\CartController;
use App\Models\Cart;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;




Route::get('/', function () {
    $categories = Category::all(); // fetch all categories from the DB

    //$products = Product::take(6)->get(); // limit to 6 items
    $products = Product::inRandomOrder()->take(6)->get();
    $featuredProducts = Product::where('is_featured', true)->inRandomOrder()->take(3)->get();

    $bestSellers = Product::where('is_best_seller', true)->inRandomOrder()->take(6)->get();
    $wishlists = Wishlist::all();
    $randomProduct = Product::inRandomOrder()->first();
    $cartItems = Cart::where('user_id', Auth::id())->get();
    $wishlistCount = Wishlist::where('user_id', auth()->id())->count();


    return view('welcome', compact('categories','products','featuredProducts', 'bestSellers','wishlists','randomProduct','cartItems','wishlistCount'));
});

Route::get('/shop', function () {
    $cartItems = Cart::where('user_id', Auth::id())->get();
        return view('shop',compact('cartItems'));
});
/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
Route::get('/orders/{order}', [OrderController::class, 'show'])->name('order.show');
/******************************************************* */

Route::patch('/admin/orders/{order}/status', [OrderController::class, 'updateStatus'])
    ->name('admin.orders.updateStatus');
/*toggle user to admin via admin dashboard*/


Route::patch('/admin/users/{user}/toggle-role', [UserController::class, 'toggleRole'])
    ->middleware(['auth', 'admin']) // only admins can access
    ->name('users.toggleRole');


/********************************************************** */
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

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
/*Route::get('/shop', [ShopController::class, 'index'])->name('shop');*/
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/price-range', [ProductController::class, 'getPriceRange']);

Route::get('admin/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
Route::post('admin/categories', [CategoryController::class, 'store'])->name('admin.categories.store');

Route::middleware('web')->group(function () {
    $products = Product::all();
    Route::post('/wishlist/add/{product_id}', [WishlistController::class, 'add'])->name('wishlist.add');
    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');
    Route::delete('/wishlist/remove/{id}', [WishlistController::class, 'remove'])->name('wishlist.remove');
    Route::delete('/wishlist/clear', [WishlistController::class, 'clearAll'])->name('wishlist.clear');

});

    //details.blade.php
    Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

//cart
Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'index']);
    Route::post('/cart/add', [CartController::class, 'add']);
    Route::delete('/cart/remove/{id}', [CartController::class, 'remove']);
    Route::delete('/cart/clear', [CartController::class, 'clear']);

    /////////////////////////////////////////////////////////////////////////////
    Route::get('/checkout', [OrderController::class, 'checkout'])->name('order.checkout');
    Route::post('/place-order', [OrderController::class, 'placeOrder'])->name('order.place');
    Route::get('/order-success/{id}', [OrderController::class, 'success'])->name('order.success');
});
Route::post('/wishlist/move/{product}', [WishlistController::class, 'moveFromCart'])->name('wishlist.move');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
/*with no loading*/
Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');


//Route::post('/wishlist/add/{product}', [WishlistController::class, 'add'])->name('wishlist.add');
Route::post('/wishlist/add/', [WishlistController::class, 'add'])->name('wishlist.add');


//about.blade.php page
Route::get('/about', function () {
    return view('about'); // this will load resources/views/about.blade.php
})->name('about');
Route::get('/about', [AboutController::class, 'index'])->name('about');
//contact.blade.php

// Public contact form
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Admin routes (with middleware)
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/contacts', [ContactController::class, 'adminIndex'])->name('admin.contacts.index');
    Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('admin.contacts.show');
    Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('admin.contacts.destroy');
});
// + - QTY in CART
Route::post('/cart/update/{id}', [CartController::class, 'updateQuantity'])->name('cart.update');






