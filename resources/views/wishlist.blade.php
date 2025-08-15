<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @once
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
            integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endonce
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title>Wishlist</title>
    <style>
        @media(max-width:767px) {

            nav.desktop {
                display: flex;
            }

            .menu-toggle {
                display: none;
            }

            nav.mobile {
                display: none !important;
            }


            .button-group {
                display: flex;
                flex-direction: column;
                gap: 1rem;
                justify-content: center;
            }


            .btn {
                padding: 0.75rem 1.5rem;
                font-size: 1rem;
                font-weight: 400;
                text-decoration: none;

                transition: background-color 0.3s ease;
            }

            .btn-primary {
                background-color: #C4A35A;
                color: #fff;
                border: none;
                border-radius: 50px;
            }

            .btn-primary:hover {

                transform: scale(1.02);
                transition: 0.3s ease-in-out;
                opacity: 70%;

            }

            .btn-outline {
                border: 2px solid #fff;
                color: #fff;
                border-radius: 50px;
            }

            .btn-outline:hover {
                transform: scale(1.02);
                transition: 0.3s ease-in-out;
                opacity: 70%;

            }

        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #e5e5e5;
            border-bottom: 1px solid #e5e5e5;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 30px;
            font-weight: bold;
            text-decoration: none;
            color: black;
        }

        nav.desktop {
            display: none;
        }

        nav.desktop a,
        nav.mobile a {
            text-decoration: none;
            color: #4a4a4a;
            font-weight: 500;
            margin-right: 1.5rem;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #C4A35A;
        }

        .icons {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .icon {
            color: #4a4a4a;
            cursor: pointer;
        }

        .icon:hover {
            color: #C4A35A;
        }

        .cart-badge {
            position: absolute;
            top: -6px;
            right: -6px;
            background: #C4A35A;
            color: white;
            font-size: 12px;
            border-radius: 50%;
            width: 17px;
            height: 13px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .cart-icon {
            position: relative;
        }

        .menu-toggle {
            display: inline-block;
            cursor: pointer;
        }

        nav.mobile {
            display: none;
            flex-direction: column;
            padding: 1rem;
        }

        nav.mobile.open {
            display: flex;
        }

        @media (min-width: 768px) {
            nav.desktop {
                display: flex;
            }

            .menu-toggle {
                display: none;
            }

            nav.mobile {
                display: none !important;
            }
        }
    </style>
    <style>
        .button-primary {
            background-color: #C4A35A;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.375rem;
            font-weight: 600;
            transition: background-color 0.3s;
            text-decoration: none;
        }

        .button-primary:hover {
            background-color: #a78948;
        }

        .button-primary-sm {
            background-color: #C4A35A;
            color: white;
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
            border-radius: 0.25rem;
            font-weight: 500;
            transition: background-color 0.3s;
        }

        .button-primary-sm:hover {
            background-color: #a78948;
        }
    </style>
    <style>
        .container2 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 3rem 1rem;
        }

        .empty-wishlist {
            text-align: center;
            padding: 4rem 2rem;
        }

        .icon-circle {
            background: #f3f3f3;
            border-radius: 9999px;
            width: 120px;
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
        }

        .empty-wishlist h1 {
            font-size: 1.75rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .empty-wishlist p {
            color: #666;
            margin-bottom: 2rem;
        }

        .btn-primary {
            background-color: #C4A35A;
            color: white;
            padding: 0.6rem 1.2rem;
            border: none;
            border-radius: 5px;
            font-weight: 500;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #af8d44;
        }

        .btn-primary.small {
            padding: 0.4rem 1rem;
            font-size: 0.875rem;
        }

        .wishlist-title {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 2rem;
        }

        .wishlist-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            border-bottom: 1px solid #ddd;
            padding-bottom: 1rem;
        }

        .wishlist-header h2 {
            font-size: 1.2rem;
            font-weight: 500;
        }

        .clear-btn {
            background: none;
            border: none;
            color: #666;
            cursor: pointer;
        }

        .clear-btn:hover {
            color: #C4A35A;
        }

        .wishlist-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 1.5rem;
        }

        .wishlist-card {
            border: 1px solid #eee;
            padding: 1rem;
            display: flex;
            flex-direction: column;
        }

        .image-container {
            height: 240px;
            overflow: hidden;
            margin-bottom: 1rem;
            display: block;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .image-container:hover img {
            transform: scale(1.05);
        }

        .wishlist-info h3 a {
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            color: black;
        }

        .wishlist-info h3 a:hover {
            color: #C4A35A;
        }

        .category {
            color: #888;
            margin: 0.25rem 0;
        }

        .price {
            color: #C4A35A;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .wishlist-actions {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            margin-top: auto;
        }

        .remove-btn {
            background: none;
            border: none;
            color: #666;
            cursor: pointer;
            font-size: 0.9rem;
        }

        .remove-btn:hover {
            color: #C4A35A;
        }
    </style>

</head>

<body>
    <!--Start NavBar-->
    <header>
        <div class="container">
            <!-- Logo -->
            <a href="#" class="logo">Merath</a>

            <!-- Desktop Navigation -->
            <nav class="desktop">
                <a href="/">Home</a>
                <a href="/shop">Shop</a>
                <a href="/collection">Collections</a>
                <a href="/about">About</a>
                <a href="contact">Contact</a>
            </nav>

            <!-- Icons -->
            <div class="icons">
                <a href="/register" class="icon"><i class="fas fa-user"></i></a>
                @auth
                    <a href="{{ route('wishlist') }}"class="icon">
                        <i class="fas fa-heart"></i>
                    </a>
                @endauth
                <div class="icon cart-icon" ><!--onclick="toggleCart()"-->
                    <a href="/cart">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="cart-badge" id="cart-count">{{ $cartItems->count() }}</span>
                    </a>
                </div>
                <div class="menu-toggle icon" onclick="toggleMenu()"><i class="fas fa-bars"></i></div>
            </div>


        </div>

        <!-- Mobile Navigation -->
        <nav class="mobile" id="mobileMenu">
            <a href="#">Home</a>
            <a href="#">Shop</a>
            <a href="#">Collections</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </nav>
    </header>
    <!--End NavBar-->


    <div class="container2">
        @if ($products->isEmpty())
            <div class="empty-wishlist">
                <div class="icon-circle">
                    <i class="fa-regular fa-heart fa-3x text-gray-400"></i>
                </div>
                <h1>Your Wishlist is Empty</h1>
                <p>Save your favorite items to view them later.</p>
                <a href="/shop" class="btn-primary">Explore Products</a>
            </div>
        @else
            <h1 class="wishlist-title">My Wishlist</h1>

            <div class="wishlist-header">
                <h2>Saved Items ({{ $wishlists->count() }})</h2>
                <form action="{{ route('wishlist.clear') }}" method="POST"
                    onsubmit="return confirm('Are you sure you want to remove all items?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="clear-btn">Clear Wishlist</button>
                </form>
            </div>

            <div class="wishlist-grid">
                @foreach ($wishlists as $wishlist)
                    @php
                        $product = $products->firstWhere('id', $wishlist->product_id);
                    @endphp

                    @if ($product)
                        <div class="wishlist-card">
                            <a href="{{ route('product.show', $product->id) }}" class="image-container">
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                            </a>

                            <div class="wishlist-info">
                                <h3>
                                    <a href="{{ route('product.show', $product->id) }}">{{ $product->name }}</a>
                                </h3>
                                <p class="category">{{ $product->category->name ?? 'Uncategorized' }}</p>
                                <p class="price">${{ $product->price }}</p>

                                <div class="wishlist-actions">
                                    <form action="/cart/add" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $wishlist->product_id }}">
                                        <button type="submit" class="btn-primary small">Add to Cart</button>
                                    </form>

                                    <form action="{{ route('wishlist.remove', $wishlist->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="remove-btn">Remove</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        @endif
    </div>










</body>

</html>
