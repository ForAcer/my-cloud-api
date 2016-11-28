<?php namespace App\Http\Controllers;


use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller {

    public function index(){
        $articles=Article::all();
        return $this->response->array($articles->toArray());
    }

    public function store(Request $request){
    }

    public function show($id){
        $article=Article::find($id);
        return $this->response->array($article->toArray());
    }

    public function update(){

    }

    public function destroy(){
        
    }

}
