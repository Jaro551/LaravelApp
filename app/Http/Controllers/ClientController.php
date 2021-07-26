<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Session;

class ClientController extends Controller
{
    function clientform(Request $request)
    {
        $value = Session::get('itemid');
        
        $client = new Client;
        $client->name=$request->name;
        $client->surname=$request->surname;
        $client->phone_number=$request->phone_number;
        $client->email=$request->email;
        $client->address=$request->address;
        $client->date_of_birth=$request->date_of_birth;
        $client->save();
        
        $product = Product::find($value);
        $product->isAvailable = false;
        $product->client_id=$client->id;
        $product->save();

        return redirect()->action([ProductController::class, 'showProducts']);
    }
}
