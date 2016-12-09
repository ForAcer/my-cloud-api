<?php
namespace App\Repositories\Eloquent;
use App\Repositories\Contracts\ArticleRepositoryContract;
class ArticleRepository extends BaseRepository implements ArticleRepositoryContract
{
    public function model()
    {
        return 'App\Models\Article';
    }

    public function paginate($limit = null)
    {
        return $this->model->select('id','category_id','title','abstract','view','like','created_at','updated_at')
            ->paginate($limit);
    }
}