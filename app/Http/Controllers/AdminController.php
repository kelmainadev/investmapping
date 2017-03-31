<?php

namespace App\Http\Controllers;

use App\Providers\AuthServiceProvider;
use Illuminate\Http\Request;
use App\Category;
use App\Reply;
use App\Inquiry;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }


    public function products()
    {
        $categories = Category::all();

        return view('admin.product', ['categories' => $categories]);
    }

    public function categories()
    {
        return view('admin.categories');
    }

    public function replies(Request $request, $id)
    {
        $replies = Reply::all();
        $reply = new Reply;
        $reply->title = $request->input('title');
        $reply->content = $request->input('content');
        $reply->inquiry_id = $id;
        $reply->user_id = Auth::id();
        $reply->save();
        return view('admin.reply_inquiry', ['replies' => $replies]);
    }

    public function create_reply($id)
    {
        $inquiries = Inquiry::where('id', $id)->get();

        return view('admin.reply_inquiry', ['inquiries' => $inquiries]);
    }


    public function inquiries()
    {
        $inquiries = Inquiry::with('clients')->get();

        return view('admin.clientenquiries', ['inquiries' => $inquiries]);
    }

}
