<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use http\Message;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function checkout(Product $product)
    {
        session()->push('product', $product->id);
        return back();
    }

    public function order()
    {
        $session = session()->get('product') ?? [];
        $products = Product::whereIn('id', $session)->get();
        return view('checkout', ['products' => $products, 'session' => $session]);
    }

    public function confirmation()
    {
        $session = session()->get('product') ?? [];
        $products = Product::whereIn('id', $session)->get();
        return view('confirmation', compact('products'));
    }

    public function confirm(Request $request)
    {
        Order::create([
            'total_shipping_value' => $request->total_shipping_value,
            'client_name' => $request->client_name,
            'total_product_value' => $request->total_product_value,
            'client_address' => $request->client_address
        ]);
        session()->remove('product');
        return redirect('/products')->with('status', 'Order is created');
    }
}
