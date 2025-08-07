<h2>Your Wishlist</h2>

@foreach ($wishlists as $item)
    <div>
        <p>Product ID: {{ $item->product_id }}</p>

        <form action="{{ route('wishlist.remove', $item->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Remove ❌</button>
        </form>
    </div>
@endforeach
