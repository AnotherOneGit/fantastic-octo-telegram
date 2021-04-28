<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $session = session()->get('product') ?? [];
        $products = Product::with('brand')->orderBy('price')->paginate(9);
        return view('products', compact('products', 'session'));
    }
}
