<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('exam_id')->nullable()->unsigned();
            $table->string('subject',500)->nullable();
            $table->longText('question',500)->nullable();
            $table->string('option_a',500)->nullable();            
            $table->string('option_b',500)->nullable();            
            $table->string('option_c',500)->nullable();            
            $table->string('option_d',500)->nullable();            
            $table->string('answer',500)->nullable(); 
            $table->longText('answer_description')->nullable(); 
            $table->string('image')->nullable(); 
            $table->string('image1')->nullable(); 
            $table->string('image2')->nullable(); 
            $table->foreign('exam_id')->references('id')->on('exams')->onDelete('cascade');
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
        Schema::dropIfExists('questions');
    }
}
