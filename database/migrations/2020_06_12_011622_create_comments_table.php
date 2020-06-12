<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('name');
            //$table->string('email');
            $table->text('comment');
            //$table->integer('post_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('book_id');
            //$table->boolean('approved');
            $table->timestamp('commented_on');
            $table->timestamps();

            //$table->foreign('post_id')->references('id')->on('books')->onDelete('cascade');
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
