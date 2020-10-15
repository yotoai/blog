<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateBlogTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_types', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pid')->nullable(false)->comment('父级id');
            $table->string('name')->nullable(false)->comment('分类名称');
            $table->string('path')->nullable(false)->comment('路径');
            $table->timestamps();
        });

        DB::statement("ALTER TABLE `blog_types` COMMENT '博客分类表'" );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_types');
    }
}
