<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<div class="container">
    <h1>Checkout</h1>
    @forelse($products as $product)
        {{ $product->name }} - {{ $product->price }}<hr>
    @empty
        <p>Cart is empty</p>
    @endforelse
    <form action="">

    </form>
</div>
