<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ClientSelection;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Schema;

class ClientController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('client/products', ['products' => $products]);
    }

    public function products()
    {
        $products = DB::table('products')->paginate(5);
        return view('welcome', ['products' => $products]);
    }

    //The code is used to enter details of how often items are clicked by users.
    public function selections($id)
    {
        $auth = Auth::id();
        //get count from products table
        $product = ClientSelection::where('product_id', $id)
            ->where('client_id', $auth)
            ->first();
        $pcount = Product::where('id', $id)->pluck('count');
        if ($product) {
            $client_count = ClientSelection::where('product_id', $id)->pluck('client_count');
            $count = $pcount[0] + 1;
            $client_count = $client_count[0] + 1;
            dd($client_count);
            $user = Auth::id();
            ClientSelection::where('product_id', $id)
                ->where('client_id', $user)
                ->update(['count' => $count, 'client_count' => $client_count]);
            //update the products count
            $productCount = Product::where('id', $id)->update(['count' => $count,])
                ->update(['client_count' => $client_count]);
            return response()->json(['count' => $productCount]);
        } else
//            dd("created a new one");
            $client = new ClientSelection;
        $client->product_id = $id;
        $client->client_id = Auth::id();
        $client->count = $client->count[0] + 1;
        $client->client_count = $client->client_count[0] + 1;
        $client->save();
        $count = $pcount[0] + 1;
        Product::where('id', $id)->update(['count' => $count]);
        return response()->json(['success' => $productCount]);
    }


    public function enquiries()
    {
        return view('client.enquiries');
    }

    public function investment()
    {
        return view('client.investment');
    }

    public function show($id)
    {
        $products = Product::where('id', $id)->get();

        return view('client.show', ['products' => $products]);

    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $result = Product::where("name", "LIKE", "%$search%")
            ->orWhere("description", "LIKE", "%$search%")
            ->orWhere("price", "<=", $search)
            ->get();

        if ($result) {
            return view('client.search', ['products' => $result]);
        } else {

        }


    }
}

