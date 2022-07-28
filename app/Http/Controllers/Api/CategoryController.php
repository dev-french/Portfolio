<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{
    /**
     * HTTP Method : GET
     * URL : /categories
     */
    public function browse()
    {
    // On va chercher nos données dans la BDD

    // Version sans objet, donc pas Active Record
    // use Illuminate\Support\Facades\DB;
    // $results = DB::select("SELECT * FROM categories");
    //var_dump($results);
    }
};
