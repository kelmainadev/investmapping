<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inquiries;
use Illuminate\Support\Facades\Auth;


class InquiriesController extends Controller
{
    public function index()
    {
        $inquiries = Inquiries::all();
        return view('client.inquiries', ['inquiries' => $inquiries]);

    }

    public function store(Request $request)
    {

        $inquiries = new Inquiries;

        $inquiries->title = $request->Input('title');
        $inquiries->client_id = Auth::id();
        $inquiries->description = $request->Input('description');
        $inquiries->save();
        return redirect('client/inquiries');
    }

}
