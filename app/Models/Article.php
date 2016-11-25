<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * 文章所属的分类
     */
    public function category()
    {
        return $this->belongsTo('App\Models\ArticleCategory', 'category_id');
    }

    /**
     * 文章的标签
     */
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'article_tag', 'article_id', 'tag_id');
    }
}