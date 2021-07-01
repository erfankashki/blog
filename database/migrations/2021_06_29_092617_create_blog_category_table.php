<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_category', function (Blueprint $table) {
            $table->id()->unsigned()->index();
            $table->bigInteger('category_id')->unsigned()->index();
            $table->bigInteger('blog_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('blog_id')
                ->references('id')
                ->on('blog')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('category_id')->
            references('id')->on('category')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            
        });


        // Schema::table('blog_category', function (Blueprint $table) {

        //     $table->foreign('blog_id')->
        //     references('id')->on('blog')
        //     ->onDelete('cascade')
        //     ->onupdate('cascade');

        //     $table->foreign('category_id')->
        //     references('id')->on('category')
        //     ->onDelete('cascade')
        //     ->onupdate('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('blog_category', function (Blueprint $table) {

        //     $table->dropForeign('blog_category_blog_id_foreign');
        //     $table->dropForeign('blog_category_category_id_foreign');
        // });
        Schema::dropIfExists('blog_category');
    }
}
