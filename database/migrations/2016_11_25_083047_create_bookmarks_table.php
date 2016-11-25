<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookmarksTable extends Migration
{
    /**
     * Run the migrations.
     * 书签表
     * @return void
     */
    public function up()
    {
        Schema::create('bookmarks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned()->comment('分类id');
            $table->string('title')->comment('标题');
            $table->string('url')->comment('书签路径');
            $table->string('favicon')->comment('图标');
            $table->integer('sort')->unsigned()->comment('排序');
            $table->timestamps();//加入created_at,updated_at字段
            $table->softDeletes();//加入软删除deleted_at字段
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
