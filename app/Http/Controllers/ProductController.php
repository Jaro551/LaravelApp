<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    function showProducts()
    {
        $products = Product::all();
        return view('showProducts', ['products' => $products]);
    }
}
