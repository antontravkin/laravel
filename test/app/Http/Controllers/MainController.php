<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function Home()
    {
        return view('home');
    }
    public function page1()
    {
        return view('page1');
    }
    public function page2()
    {
        $messages = new Message();

        return view('page2', ['message' => $messages->all()]);
    }

    public function check(Request $request)
    {
        $request->validate([
            'message' => 'required|min:5',
        ]);
        $message = new Message();
        $message->message = $request->input('message');

        $message->save();

        return redirect()->route('page2');
    }
}
