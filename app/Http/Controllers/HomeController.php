<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class HomeController extends Controller {

    public function home()
    {
        return view('index');
    }
    public function contactSend(Request $request)
    {
        $message = new Message();

        $message->email = $request->email;
        $message->name = $request->name;
        $message->subject = $request->subject;
        $message->contenu = $request->contenu;

        dd($message);
    }
}
