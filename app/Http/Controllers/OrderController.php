<?php

namespace App\Http\Controllers;

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
}
