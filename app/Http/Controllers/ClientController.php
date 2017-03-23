<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ClientController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('client/products',['products'=>$products]);
    }
}
