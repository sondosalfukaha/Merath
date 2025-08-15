<div class="container">
    <h2>Checkout</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="{{ route('place.order') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="customer_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="customer_email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="customer_phone" class="form-control">
        </div>

        <div class="mb-3">
            <label>Address</label>
            <textarea name="customer_address" class="form-control"></textarea>
        </div>

        <h4>Order Summary</h4>
        <ul>
            @foreach ($cart as $item)
                <li>{{ $item['name'] }} - {{ $item['quantity'] }} x {{ $item['price'] }} =
                    {{ $item['price'] * $item['quantity'] }}</li>
            @endforeach
        </ul>
        <strong>Total: {{ $total }}</strong>

        <button type="submit" class="btn btn-success mt-3">Place Order</button>
    </form>
</div>
