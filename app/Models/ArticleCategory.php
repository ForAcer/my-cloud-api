<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * 属于该分类的文章
     */
    public function articles()
    {
        return $this->hasMany('App\Models\Article', 'category_id');
    }
}