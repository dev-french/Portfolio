<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends Controller
{
    /**
     * HTTP Method : GET
     * URL : /categories
     */
    public function contactGet()
    {
        echo "je suis la route en get contact";
    }

    public function contactPost()
    {
        echo "je suis la route en post contact";
    }
};

    // On va chercher nos données dans la BDD
   // Version sans objet, donc pas Active Record
    // $results = DB::select("SELECT * FROM categories");
    // var_dump($results);
