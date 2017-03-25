<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')->paginate(5);
        return view('admin/viewproducts',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->category_id=$request->category_id;
        $product->name=$request->name;
        $product->user_id= Auth::id();
        $product->price=$request->price;
        $product->description=$request->description;

        $product->save();
        return redirect('admin/products')->with('saved_successfully','Products successfully saved');

    }
    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $products = Product::where('id', $id)->get();
        return view('admin.products.edit', ['products' => $products]);
    }

    public function update(Request $request, $id)
    {
        if(Input::hasFile('image'))
        {
            $file= $request->file('image');
            $file_name= $file->getClientOriginalName();
            $image=$request->file('image')->move('images/productsimage', $file_name);

            $image=$image->getPathname();
        }
        $name = $request->input('name');
        $description = $request->input('description');
        $price = $request->input('price');

        Product::where('id', $id)->update(['name'=>$name, 'description'=>$description, 'image'=>$image, 'price'=>$price ]);
        return redirect('/admin/products/edit_'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
