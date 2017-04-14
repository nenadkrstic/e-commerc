<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('articles_id')->unsigned();
            $table->longText('comment');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('articles_id')->references('id')->on('articles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
