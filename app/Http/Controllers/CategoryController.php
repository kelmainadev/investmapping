<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Auth;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('adminarea.products', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->user_id = Auth::id();
        $category->description = $request->description;

        $category->save();
        return redirect('admin/categories')->with('saved_successfully', 'Products successfully saved');
    }



}
