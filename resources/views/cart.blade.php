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
            margin: 0 auto;
            padding: 1.5rem;
            /*box-shadow: 0 4px 8px #dcdcdc4f;*/
        }

        .cart-header,
        .cart-item {
            display: flex;
            align-items: center;
            padding: 0.75rem 0;
            border-bottom: 1px solid #ddd;

        }

        .cart-item {
            box-shadow: 0 4px 8px #dcdcdc4f;
            transition: 0.3s ease-in;
        }

        .cart-item:hover {
            scale: 102%;
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
            border-radius: 10px;
            width: 25%;
            padding: 10px;
            margin-top: 10px;
            box-shadow: 0 4px 8px #c4a35aaf;
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
            transition: 0.3s ease-in-out;
            font-size: 15px;
        }

        .btn-clear {
            background-color: red;
            color: #fff;
        }

        .btn-clear:hover {
            opacity: 50%;
        }

        .btn-place:hover {
            opacity: 50%;
        }

        .btn-place {
            background-color: #C4A35A;
            color: #fff;
        }
    </style>
    <style>
        .checkout-tracker {
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            max-width: 400px;
            margin: 20px auto -39px auto;
            /* centers horizontally */
        }

        .checkout-tracker::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 20px;
            right: 20px;
            height: 4px;
            background-color: #ccc;
            /* line between circles */
            z-index: 0;
            transform: translateY(-50%);
        }

        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .step .circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #ccc;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-bottom: 5px;
            transition: 0.3s;
        }

        .step.completed .circle {
            background-color: #4CAF50;
            /* green for completed */
        }

        .step.active .circle {
            background-color: #b3934f;
            /* current step */
        }

        .step .label {
            font-size: 12px;
            color: #555;
            text-align: center;
        }

        .col-move i {
            transition: 0.3s ease-in-out;
            color: #b3934f;
            font-size: 27px;
        }

        .col-move i:hover {
            color: #C4A35A;


        }
    </style>
    <style>
        .qty-change {
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
            color: #C4A35A;
            font-weight: bold;
            padding: 0 10px;
            user-select: none;
        }

        .qty-change:hover {
            transform: scale(1.2);
            transition: transform 0.2s ease;
        }
    </style>
    <style>
        /* Modal background */
        .modal {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        /* Modal box */
        .modal-content {
            background: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            animation: pop 0.2s ease-in-out;
        }

        .modal-content p {
            font-size: 18px;
            margin-bottom: 15px;
        }

        .modal-content button {
            background: #007bff;
            border: none;
            padding: 8px 16px;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .modal-content button:hover {
            background: #0056b3;
        }

        @keyframes pop {
            from {
                transform: scale(0.8);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }
    </style>
    <style>
        /* Modal Styles */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
            /* Black overlay */
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 300px;
        }

        .modal-actions {
            margin-top: 20px;
            display: flex;
            justify-content: space-around;
        }

        .btn-yes {
            background-color: #C4A35A;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-no {
            background-color: #ccc;
            color: #000;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
    <title>Cart</title>
</head>

<body>
    <!--Start NavBar-->
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
                <a href="/contact">Contact</a>
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
                    <a href="/cart" style="text-decoration: none;">
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
    <!--End NavBar-->
    @php
        // currentStep can be 'cart', 'checkout', 'success'
        $currentStep = $currentStep ?? 'cart';
    @endphp

    <div class="checkout-tracker">
        <div class="step {{ $currentStep == 'cart' ? 'active' : ($currentStep != 'cart' ? 'completed' : '') }}">
            <div class="circle">1</div>
            <div class="label">Cart</div>
        </div>
        <div class="step {{ $currentStep == 'checkout' ? 'active' : ($currentStep == 'success' ? 'completed' : '') }}">
            <div class="circle">2</div>
            <div class="label">Checkout</div>
        </div>
        <div class="step {{ $currentStep == 'success' ? 'active' : '' }}">
            <div class="circle">3</div>
            <div class="label">Success</div>
        </div>
    </div>

    <div class="cart-container">
        <h2>Your Cart</h2>

        @if ($cartItems->isEmpty())
            <p>Your cart is empty.</p>
        @else
            <div class="cart-header">

                <span class="col col-product">Description</span>
                <span class="col col-qty">Quantity</span>

                <span class="col col-price">Price</span>
                <span class="col col-price">SubTotal</span>
                <span class="col col-remove">Remove</span>
                <span class="col col-remove">Move to</span>
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

                <div class="cart-item" data-id="{{ $item->id }}">


                    <div class="col col-product">

                        <img src="{{ asset('storage/' . $item->product->image) }}" alt="{{ $item->product->name }}">
                        <div class="product-info">
                            <h4>{{ $item->product->name }}</h4>
                            <p>Product Code: {{ $item->product->id }}</p>
                        </div>
                    </div>

                    <div class="col col-qty">
                        <button class="qty-change" data-action="decrease" data-id="{{ $item->id }}">−</button>
                        <span id="qty-{{ $item->id }}">{{ $item->quantity }}</span>
                        <button class="qty-change" data-action="increase" data-id="{{ $item->id }}">+</button>
                    </div>

                    <div class="col col-price">
                        {{ $item->product->price }} JD
                    </div>
                    <div class="col col-price" id="subtotal-{{ $item->id }}">
                        {{ $subtotal }} JD
                    </div>

                    <div class="col col-remove">
                        <form method="POST" action="/cart/remove/{{ $item->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="remove-btn">×</button>
                        </form>

                    </div>
                    <div class="col col-move">
                        <form method="POST" action="{{ route('wishlist.move', $item->product->id) }}"
                            style="display:inline-block; margin-left:5px;">
                            @csrf
                            <button type="submit" class="btn-heart-plus"
                                style="background:none; border:none; cursor:pointer; position:relative; font-size:1.2rem;">
                                <i class="fa-regular fa-heart"></i>
                                <i class="fa-solid fa-plus"
                                    style="position:absolute; top:0; right:0; font-size:0.6rem; color:#C4A35A;"></i>
                            </button>

                        </form>
                    </div>

                </div>
            @endforeach

            <div class="cart-summary">
                <div style="margin-bottom:15px;">Total Items:
                    <span id="total-items">
                        {{ $totalQty }}
                    </span>
                    @if ($totalQty == 1)
                        item
                    @else
                        items
                    @endif
                </div>

                <div style="margin-bottom:15px;">Total Amount: <span id="total-amount">
                        {{ $total }}</span> JD
                </div>
                <div class="cart-actions">
                    <!-- Clear Cart Form -->
                    <form id="clear-cart-form" method="POST" action="/cart/clear">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn-clear" id="clear-cart-btn">
                            Clear Cart <i class="fa-solid fa-trash fa-sm"></i>
                        </button>
                    </form>

                    <!-- Modal -->
                    <div id="confirm-modal" class="modal">
                        <div class="modal-content">
                            <p>Are you sure you want to clear the cart?</p>
                            <div class="modal-actions">
                                <button id="modal-yes" class="btn-yes">Yes</button>
                                <button id="modal-no" class="btn-no">No</button>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('order.checkout') }}" class="btn-place"
                        style="text-decoration: none; font-weight:100;">Process To</a>



                </div>
            </div>
        @endif
    </div>
    <!-- Modal Structure -->
    <div id="stockModal" class="modal">
        <div class="modal-content">
            <p>⚠️ Stock limit reached</p>
            <button id="closeModal">OK</button>
        </div>
    </div>

    <script>
        document.querySelectorAll('.qty-change').forEach(btn => {
            btn.addEventListener('click', async function() {
                const action = this.dataset.action;
                const itemId = this.dataset.id;
                const qtySpan = document.getElementById(`qty-${itemId}`);

                try {
                    const res = await fetch(`/cart/update/${itemId}`, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            action
                        })
                    });

                    const data = await res.json();

                    if (data.success) {
                        if (data.removed) {
                            document.querySelector(`.cart-item[data-id="${itemId}"]`).remove();
                        } else {
                            // update quantity
                            qtySpan.textContent = data.newQuantity;
                            // update subtotal
                            document.getElementById(`subtotal-${itemId}`).textContent = data.subtotal +
                                ' JD';
                        }

                        // update total amount
                        document.getElementById('total-amount').textContent = data.total + ' JD';

                        // ✅ update total items
                        const totalItemsEl = document.getElementById('total-items');
                        if (totalItemsEl) {
                            totalItemsEl.textContent = data.totalQty + (data.totalQty === 1 ? ' item' :
                                ' items');
                        }
                    } else {
                        // 🔴 If backend sends stock error, show modal instead of alert
                        if (data.message && data.message.includes("Stock limit")) {
                            showStockModal();
                        } else {
                            alert(data.message ?? 'Update failed.');
                        }
                    }
                } catch (err) {
                    console.error(err);
                    alert('Failed to update quantity.');
                }
            });
        });

        // Function to show the stock modal
        function showStockModal() {
            document.getElementById("stockModal").style.display = "flex";
        }

        // Close modal when clicking OK
        document.getElementById("closeModal").onclick = function() {
            document.getElementById("stockModal").style.display = "none";
        }
    </script>
    <script>
        if (data.success) {
            if (data.removed) {
                document.querySelector(`.cart-item[data-id="${itemId}"]`).remove();
            } else {
                qtySpan.textContent = data.newQuantity;
                document.getElementById(`subtotal-${itemId}`).textContent = data.subtotal + ' JD';
            }

            // update total amount
            document.getElementById('total-amount').textContent = data.total + ' JD';

            // 🔴 update total items count
            if (data.totalQty !== undefined) {
                document.getElementById('total-items').textContent = data.totalQty;
            }
        }
    </script>
    <script>
        const clearBtn = document.getElementById('clear-cart-btn');
        const modal = document.getElementById('confirm-modal');
        const yesBtn = document.getElementById('modal-yes');
        const noBtn = document.getElementById('modal-no');
        const form = document.getElementById('clear-cart-form');

        // Show modal on button click
        clearBtn.addEventListener('click', () => {
            modal.style.display = 'flex';
        });

        // If Yes, submit the form
        yesBtn.addEventListener('click', () => {
            form.submit();
        });

        // If No, hide modal
        noBtn.addEventListener('click', () => {
            modal.style.display = 'none';
        });

        // Close modal if clicked outside content
        window.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.style.display = 'none';
            }
        });
    </script>

</body>

</html>
