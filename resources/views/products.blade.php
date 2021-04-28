<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
@if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="container">
    <table class="table">
        <thead>
        <th>Brand</th>
        <th>Product</th>
        <th>Price</th>
        <th>
            {{ count(session()->get('product') ?? []) }}
        </th>
        <th><a href="/order">Cart</a></th>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->brand->name }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}€</td>
                <td>
                    <form action="{{ route('checkout', $product) }}" method="get">
                        <button type="submit"
                                class="btn btn-success" {{ in_array($product->id, $session) ? 'disabled' : null }} >
                            Buy
                        </button>
                    </form>
                    {{--                    <button type="submit" class="btn">Buy Now</button>--}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $products->links() }}
</div>
