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
        .cart-container {
            max-width: 1000px;
            margin: 2rem auto;
            padding: 1rem;
        }

        .cart-header,
        .cart-item {
            display: flex;
            align-items: center;
            padding: 0.75rem 0;
            border-bottom: 1px solid #ddd;
        }

        .cart-header {
            font-weight: bold;
            text-transform: capitalize;
        }

        .col {
            flex: 1;
            text-align: center;
        }

        .col-product {
            flex: 3;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .col-product img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 5px;
        }

        .product-info h4 {
            margin: 0;
            font-size: 1rem;
        }

        .product-info p {
            margin: 0;
            font-size: 0.8rem;
            color: #666;
        }

        .col-qty button.qty-btn {
            padding: 0.25rem 0.5rem;
            margin: 0 0.25rem;
            background-color: #0b2c55;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .col-remove .remove-btn {
            background: none;
            border: none;
            font-size: 1.2rem;
            cursor: pointer;
            color: red;
        }

        .cart-summary {
            display: flex;
            justify-content: space-between;
            padding: 1rem 0;
            font-weight: bold;
        }

        .cart-actions {
            display: flex;
            gap: 1rem;
        }

        .btn-clear,
        .btn-place {
            padding: 0.5rem 1rem;
            border: none;
            cursor: pointer;
        }

        .btn-clear {
            background-color: red;
            color: #fff;
        }

        .btn-place {
            background-color: #C4A35A;
            color: #fff;
        }
    </style>
    <title>Cart</title>
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
                <div class="icon cart-icon" onclick="toggleCart()">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="cart-badge" id="cart-count">0</span>
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
    <div class="cart-container">
        <h2>Your Cart</h2>

        @if ($cartItems->isEmpty())
            <p>Your cart is empty.</p>
        @else
            <div class="cart-header">
                <span class="col col-product">Description</span>
                <span class="col col-qty">Quantity</span>
                <span class="col col-remove">Remove</span>
                <span class="col col-price">Price</span>
            </div>

            @php
                $total = 0;
                $totalQty = 0;
            @endphp

            @foreach ($cartItems as $item)
                @php
                    $subtotal = $item->product->price * $item->quantity;
                    $total += $subtotal;
                    $totalQty += $item->quantity;
                @endphp

                <div class="cart-item">
                    <div class="col col-product">
                        <img src="{{ asset('storage/' . $item->product->image) }}" alt="{{ $item->product->name }}">
                        <div class="product-info">
                            <h4>{{ $item->product->name }}</h4>
                            <p>Product Code: {{ $item->product->id }}</p>
                        </div>
                    </div>

                    <div class="col col-qty">
                        <!--<button class="qty-btn">-</button>-->
                        <span>{{ $item->quantity }}</span>
                        <!--<button class="qty-btn">+</button>-->
                    </div>

                    <div class="col col-remove">
                        <form method="POST" action="/cart/remove/{{ $item->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="remove-btn">×</button>
                        </form>
                    </div>

                    <div class="col col-price">
                        ${{ $subtotal }}
                    </div>
                </div>
            @endforeach

            <div class="cart-summary">
                <div>Total Items: {{ $totalQty }}</div>
                <div>Total Amount: ${{ $total }}</div>
                <div class="cart-actions">
                    <form method="POST" action="/cart/clear">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-clear">Clear Cart</button>
                    </form>
                    <form method="POST" action="/order">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-place">Place Order</button>
                    </form>

                </div>
            </div>
        @endif
    </div>


</body>

</html>
