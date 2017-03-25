<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function index(){
        $users[] = Auth::user();
        $users[] = Auth::guard()->user();
        $users[] = Auth::guard('client')->user();

        $products = Product::all();
        return view('client/products',['products'=>$products]);
    }
    public function products() {
        $products = DB::table('products')->paginate(5);
        return view('welcome',['products'=>$products]);
    }

}
