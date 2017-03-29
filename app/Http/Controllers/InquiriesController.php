<?php

namespace App\Http\Controllers;

use App\Reply;
use Illuminate\Http\Request;
use App\Inquiry;
use Illuminate\Support\Facades\Auth;


class InquiriesController extends Controller
{
    public function index()
    {
        $inquiries = Inquiry::where('client_id', Auth::id())->get();
        return view('client.inquiries', ['inquiries' => $inquiries]);

    }

    public function store(Request $request)
    {

        $inquiries = new Inquiry;

        $inquiries->title = $request->Input('title');
        $inquiries->client_id = Auth::id();
        $inquiries->description = $request->Input('description');
        $inquiries->save();
        return redirect('client/inquiries');
    }

    public function show(Inquiry $inquiry)
    {
        $replies = $inquiry->replies;
        return view('client.inquiries_view', compact('inquiry', 'replies'));
    }

}
