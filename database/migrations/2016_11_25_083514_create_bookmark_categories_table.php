<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookmarkCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     * 书签分类表
     * @return void
     */
    public function up()
    {
        Schema::create('bookmark_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique()->comment('分类名');
            $table->timestamp('created_at');
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
