<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ExampleController extends Controller
{
    public function index(){
        $articles=Article::all();
        return $this->response->array($articles->toArray());
    }
}
