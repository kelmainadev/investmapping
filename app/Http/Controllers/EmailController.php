<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        $title = $request->Input('title');
        $content = $request->Input('description');
        Mail::send('client.send', ['title' => $title, 'content' => $content], function ($message) {

            $message->from('me@gmail.com', 'Christian Nwamba');

            $message->to('chrisn@scotch.io');

        });
        return response()->json(['message' => 'Request completed']);
    }
}
