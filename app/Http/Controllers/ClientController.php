<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ClientSelection;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

            $user = Auth::id();
            ClientSelection::where('product_id', $id)
                ->where('client_id', $user)
                ->update(['count' => $count, 'client_count' => $client_count]);

            //update the products count
            Product::where('id', $id)->update(['count' => $count]);
            return redirect('/client/products');
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
        return redirect('/client/products');

    }

    /*
     * Change the product clicks when a new user clicks it
     */


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
        $products = Product::all();
        $results = where('description', 'LIKE', '%' . $search . '%');
                            orWhere('price', 'LIKE', '%' . $search . '%');
                            orWhere('name', 'LIKE', '%' . $search . '%')->get();



//        dd($request->input('prices'));

//        $prices = $request->input('prices');
//        $products = Product::all();
//        $myProducts = array();
//
//        foreach($products as $product)
//        {
//            if($product->prices <= $prices)
//                array_push($myProducts, $product);
//        }

        return view('client.search', ['products' => $results]);

    }

}
