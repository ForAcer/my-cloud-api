<?php namespace App\Http\Controllers;

use App\Repositories\Contracts\ArticleRepositoryContract;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private $articleRepository;

    public function __construct(ArticleRepositoryContract $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function index()
    {
        $articles = $this->articleRepository->paginate(15);
        return $this->response->array($articles->toArray());
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
        $article = $this->articleRepository->find($id);
        return $this->response->array($article->toArray());
    }

    public function update()
    {

    }

    public function destroy($id)
    {

    }

}
