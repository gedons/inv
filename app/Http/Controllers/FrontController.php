<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;
use App\Models\Message;
use App\Models\User;
use App\Notifications\MessageCreated;
use Auth;
use Notification;

class FrontController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function inbox()
    {
        return view('inboxes');
    }

    public function sent(MessageRequest $request)
    {
        $validated = $request->validated();

        $data = Message::create($validated);

        //notify
        // $user = User::first();
        // $user->notify(new MessageCreated($inbox));

        //Notification::send(auth()->user(), new MessageCreated($inbox));
        return Redirect()->back()->with('message', 'Message Sent Successfully!!!');
    }

    public function delete($id){
        $message = Message::where('id',$id)->first();
        $message->delete();

        return Redirect()->back()->with('message', 'Message Deleted Successfully!!!');
    }
}
