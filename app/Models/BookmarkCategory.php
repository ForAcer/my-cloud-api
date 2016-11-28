<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookmarkCategory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * 属于该分类的书签
     */
    public function bookmarks()
    {
        return $this->hasMany('App\Models\Bookmark', 'category_id');
    }
}