<h2>Your Cart</h2>
@if(session('cart'))
    <ul>
        @foreach(session('cart') as $id => $details)
            <li>
                {{ $details['name'] }} - {{ $details['quantity'] }} x ₦{{ $details['price'] }}
                <form action="{{ route('cart.remove') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $id }}">
                    <button type="submit">Remove</button>
                </form>
            </li>
        @endforeach
    </ul>
@else
    <p>Your cart is empty.</p>
@endif
