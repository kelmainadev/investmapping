<?php

namespace App\Http\Controllers;

use App\Inquiry;
use Illuminate\Http\Request;
use App\Product;
use App\ClientSelection;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Schema;
use App\Inquiries;

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
        $product = ClientSelection::where('client_id', $auth)
            ->where('product_id', $id)
            ->first();
        $pcount = Product::where('id', $id)->pluck('count');
        $pcount = $pcount[0] + 1;
        Product::where('id', $id)->update(['count' => $pcount]);
        if ($product) {
//            dd("if");
            $client_count = ClientSelection::where('product_id', $id)->pluck('client_count');
            $client_count = $client_count[0] + 1;
            $user = Auth::id();
            ClientSelection::where('client_id', $user)
                ->where('product_id', $id)
                ->update(['client_count' => $client_count]);
        } else
            $client = new ClientSelection;
        $client->product_id = $id;
        $client->client_id = Auth::id();
        $client->count = $client->count[0] + 1;
        $client->client_count = $client->client_count[0] + 1;
        $client->save();
        $count = $pcount[0] + 1;
        $productCount = Product::where('id', $id)->update(['count' => $count]);
        return response()->json(['count' => $productCount]);
    }


    public function inquiries()
    {
        $inquiries = new Inquiries();
        return view('client.enquiries');
    }
    public function investment(){
        return view('client.investment');
    }

    public function investsearch(Request $request)
    {
        $search = $request->input('search');
        $result = Product::where("price", '<=',$search)->get();
        if ($result) {
            return view('client.investsearch',['products'=>$result, 'years' => $_GET['years']]);
        } else {
          return('Please Try again');
        }
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

