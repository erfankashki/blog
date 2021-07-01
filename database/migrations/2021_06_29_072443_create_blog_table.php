<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->id()->unsigned()->index();
            $table->string('title',20)->unique();
            $table->string('description',5000);
            $table->string('seo_title')->nullable();
            $table->string('seo_description')->nullable();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->timestamps();
        });
        Schema::table('blog', function (Blueprint $table) {
            $table->foreign('user_id')
            ->references('id')->on('users')
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
        Schema::table('blog', function (Blueprint $table) {

            $table->dropForeign('blog_user_id_foreign');

        });
        Schema::dropIfExists('blog');
    }
}
