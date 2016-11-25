<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicturesTable extends Migration
{
    /**
     * Run the migrations.
     * 图片
     * @return void
     */
    public function up()
    {
        Schema::create('pictures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path')->comment('路径');
            $table->string('url')->comment('图片链接');
            $table->string('md5')->comment('文件md5');
            $table->string('sha1')->comment('文件sha1编码');
            $table->enum('status', ['enable', 'disable'])
                ->default('enable')
                ->comment('状态：disable-禁用，enable-启用');
            $table->timestamps();
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
