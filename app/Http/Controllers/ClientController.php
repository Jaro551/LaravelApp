<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use App\Models\Client;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Session;

class ClientController extends Controller
{
    function clientform(ClientRequest $request)
    {
        $value = Session::get('itemid');
        
        $request->validated();
        $client = new Client;
        $isClientExist = Client::where('name', $request->name)
                                ->where('surname', $request->surname)
                                ->where('phone_number', $request->phone_number)
                                ->where('email', $request->email)
                                ->where('address', $request->address)
                                ->where('date_of_birth', $request->date_of_birth)->first();
        
        if($isClientExist === null)
        {
            $client->name=$request->name;
            $client->surname=$request->surname;
            $client->phone_number=$request->phone_number;
            $client->email=$request->email;
            $client->address=$request->address;
            $client->date_of_birth=$request->date_of_birth;
            $client->save();
        }
        $product = Product::find($value);
        $product->isAvailable = false;
        if($isClientExist === null)
            $product->client_id=$client->id;
        else
            $product->client_id=$isClientExist->id;
        $product->save();

        return redirect()->action([ClientController::class, 'showClients']);
    }

    function showClients()
    {
        $clients = Client::all();
        return view('showClients', ['clients' => $clients]);
    }
}
