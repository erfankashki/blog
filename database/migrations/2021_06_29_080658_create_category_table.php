<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->id()->unsigned()->index();
            $table->string('title',150);
            $table->bigInteger('parent_id')->nullable()->unsigned()->index();
            $table->timestamps();

            $table->foreign('parent_id')->
            references('id')->on('category')
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
        Schema::dropIfExists('category');
    }
}
