<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * 属于该标签的文章
     */
    public function articles()
    {
        return $this->belongsToMany('App\Models\Article', 'article_tag', 'tag_id', 'article_id');
    }
}