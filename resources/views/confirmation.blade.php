<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<div class="container text-center">
    <form action="/confirmation" method="POST" class="form-group">
        @csrf
        <label>Name
            <input type="text" name="client_name" class="form-control" required>
        </label>
        <label>Address
            <input type="text" name="client_address" class="form-control" required>
        </label>
        <br>
        <label for="total_shipping_value">Shipping</label>
        <select name="total_shipping_value" id="total_shipping_value" class="custom-select" style="width: auto">
            <option value="0">free standard</option>
            <option value="10">express 10 EUR</option>
        </select>
        <input type="text" hidden value="{{ array_sum(array_column($products->toArray(), 'price')) }}"
               name="total_product_value">
        <br>
        <br>
        <button class="btn btn-success">Confirm</button>
    </form>
</div>
