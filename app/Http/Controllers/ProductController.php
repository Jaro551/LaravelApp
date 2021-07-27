<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\ClientController;
use Session;

class ProductController extends Controller
{
    //
    function showProducts()
    {
        $products = Product::where('isAvailable', true)->get();
        return view('showProducts', ['products' => $products]);
    }

    function showUnAvailableProducts()
    {
        $products = Product::where('isAvailable', false)->get();
        return view('showUnAvailableProducts', ['products' => $products]);
    }

    function buynow($id)
    {
        Session::put('itemid', $id);
        return redirect()->action([ClientController::class, 'clientform'], ['id' => $id]);
    }
}
