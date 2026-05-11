<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        // Передаём данные в view с ключом 'products'
        return view('products.index', ['products' => $products]);
    }
}