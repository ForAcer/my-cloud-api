<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     * 文章表
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned()->comment('分类id');
            $table->string('title')->comment('标题');
            $table->string('abstract')->comment('文章摘要');
            $table->text('content')->comment('内容');
            $table->integer('view')->unsigned()->comment('查看次数');
            $table->integer('like')->unsigned()->comment('点赞喜欢次数');
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
