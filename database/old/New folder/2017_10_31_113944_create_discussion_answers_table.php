<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscussionAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discussion_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('question_id')->nullable()->unsigned();
            $table->integer('user_id')->nullable()->unsigned();
            $table->longText('answer')->nullable();
            $table->string('user_name')->nullable();
            $table->string('user_email')->nullable();
            $table->foreign('question_id')->references('id')->on('discussion_questions')->onDelete('cascade');            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');            
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
        Schema::dropIfExists('discussion_answers');
    }
}
