<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller {

    public function home()
    {
        return view('index');
    }
    public function contactSend(Request $request)
    {
        $message = new Message();

        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->contenu = $request->contenu;

        $message->save(); // sauvegarde dans la database

        Mail::to($message->email)->send(new ContactMail());

        return redirect()->route('index'); // redirige vers ma page d'acceuil

    }
}
