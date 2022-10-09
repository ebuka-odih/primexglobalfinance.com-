<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function messages()
    {
        $messages = Message::all();
        $users = User::where('admin', 0)->get();
        return view('admin.message.create', compact('messages', 'users'));
    }


}
