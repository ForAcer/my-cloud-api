<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
        $articles=Article::all();
        return response()->json($articles->toArray());
    }
}
