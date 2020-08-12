<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Pusher\Pusher;

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
        return view('home');
    }

    public function authenticate(Request $request){
        $socketId = $request->socker_id;
        $channelName = $request->channel_name;

        $pusher = new Pusher('App Key', 'App Secret', 'App id', [
            'cluster' => 'ap2',
            'ens'
        ]);
    }
}
