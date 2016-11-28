<?php namespace App\Http\Controllers;


use App\Models\Bookmark;

class BookmarksController extends Controller
{

    public function index()
    {
        $bookmarks=Bookmark::all();
        return $this->response->array($bookmarks->toArray());
    }

    public function store()
    {

    }

    public function show($id)
    {
        $bookmark=Bookmark::findOrFail($id);
        return $this->response->array($bookmark->toArray());
    }

    public function update()
    {

    }

    public function destroy()
    {

    }


}
