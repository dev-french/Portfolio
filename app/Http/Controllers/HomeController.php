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

        //Juste après la sauvegarde dans la database un mail me sera envoyé
        Mail::to("aiss.ghed@gmail.com")->send(new ContactMail ($message));

        return redirect()->route('index'); // redirige vers ma page d'acceuil

    }
}

