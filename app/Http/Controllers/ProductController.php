<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Product;


class ProductController extends Controller
{
    public function show()
    {
        $products = DB::table('products')->get();
        return view('front.product', ['products' => $products]);
    
    }
}
