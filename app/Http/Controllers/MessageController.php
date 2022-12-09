<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;
use App\Models\Message;
 

class MessageController extends Controller
{
    public function sent(MessageRequest $request)
    {
        $validated = $request->validated();

        $data = Message::create($validated);

       // Notification::send(auth()->user(), new UserCreatePost($data['title']));
        return Redirect()->back()->with('message', 'Message Sent Successfully!!!');
    }
}
