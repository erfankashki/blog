<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_tag', function (Blueprint $table) {
            $table->id()->unsigned()->index();
            $table->bigInteger('blog_id')->unsigned()->index();
            $table->bigInteger('tag_id')->unsigned()->index();
            $table->timestamps();
            $table->foreign('blog_id')->
            references('id')->on('blog')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('tag_id')->
            references('id')->on('tag')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('blog_tag');
    }
}
