<?php
namespace App\Repositories\Eloquent;
use App\Repositories\Contracts\BookmarkRepositoryContract;
class BookmarkRepository extends BaseRepository implements BookmarkRepositoryContract
{
    public function model()
    {
        return 'App\Models\Bookmark';
    }
}