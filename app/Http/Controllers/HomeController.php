<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Investment;
use App\Models\Message;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $investments = Investment::all();
        $sum = Investment::sum('amount');
        // $messageCount = Message::all();
        return view('home',compact('investments','sum'));
    }

    public function activities()
    {
        $activities = Investment::all();
        $sum = Investment::sum('amount');

        return view('activities', compact('activities','sum'));
    }

    public function message()
    {
        $messages = Message::all();
        return view('message', compact('messages'));
    }


}
