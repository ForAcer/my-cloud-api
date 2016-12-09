<?php namespace App\Http\Controllers;

use App\Repositories\Contracts\BookmarkRepositoryContract;

class BookmarkController extends Controller
{
    private $bookmarkRepository;

    public function __construct(BookmarkRepositoryContract $bookmarkRepository)
    {
        $this->bookmarkRepository = $bookmarkRepository;
    }

    public function index()
    {
        $bookmarks = $this->bookmarkRepository->paginate(15);
        return $this->response->array($bookmarks->toArray());
    }

    public function store()
    {

    }

    public function show($id)
    {
        $bookmark = $this->bookmarkRepository->find($id);
        return $this->response->array($bookmark->toArray());
    }

    public function update()
    {

    }

    public function destroy()
    {

    }


}
