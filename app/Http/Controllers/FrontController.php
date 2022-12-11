<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;
use App\Models\Message;

class FrontController extends Controller
{
    public function sent(MessageRequest $request)
    {
        $validated = $request->validated();

        $data = Message::create($validated);

       // Notification::send(auth()->user(), new UserCreatePost($data['title']));
        return Redirect()->back()->with('message', 'Message Sent Successfully!!!');
    }

    public function delete($id){
        $message = Message::where('id',$id)->first();
        $message->delete();

        return Redirect()->back()->with('message', 'Message Deleted Successfully!!!');
    }
}
