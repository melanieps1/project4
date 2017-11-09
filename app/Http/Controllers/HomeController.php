<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
        $messages = \App\Message::all();

        $received_messages = \App\Message::where([
            ['recipient_id', '=', \Auth::user()->id]
            ])->get();

        $sent_messages = \App\Message::where([
            ['sender_id', '=', \Auth::user()->id]
            ])->get();

        return view('home', compact('received_messages', 'sent_messages'));
    }
}
