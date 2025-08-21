<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="p-6 text-gray-900">
                        <h2 class="text-lg font-semibold mb-4">My Orders</h2>
                        <table class="min-w-full table-auto border-collapse border border-gray-300">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="px-4 py-2 border">Order #</th>
                                    <th class="px-4 py-2 border">Status</th>
                                    <th class="px-4 py-2 border">Payment</th>
                                    <th class="px-4 py-2 border">Contact</th>
                                    <th class="px-4 py-2 border">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($orders as $order)
                                    <tr>
                                        <td class="px-4 py-2 border text-center">{{ $order->order_number }}</td>
                                        <td
                                            class="px-4 py-2 border text-center
                                                            @if ($order->status == 'pending') bg-yellow-200 text-yellow-800
                                                            @elseif($order->status == 'shipping') bg-blue-200 text-blue-800
                                                            @elseif($order->status == 'delivery') bg-green-200 text-green-800 @endif
                                                        ">
                                            {{ ucfirst($order->status) }}
                                        </td>

                                        <td class="px-4 py-2 border text-center">Cash in delivery</td>
                                        <td class="px-4 py-2 border text-center">{{ $order->phone }}</td>
                                        <td class="px-4 py-2 border text-center">
                                            <a href="{{ route('order.show', $order->id) }}"
                                                class="text-blue-500
                                                hover:underline">
                                                View Details
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-4 text-gray-500">No orders found.</td>
                                    </tr>
                                @endforelse
                            </tbody>

                        </table>
                        <br>
                        <a class="nav-link text-blue-600 hover:underline" href="/">← Back to Shop</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
