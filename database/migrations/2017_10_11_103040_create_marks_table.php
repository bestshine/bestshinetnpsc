<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('exam_id')->nullable()->unsigned();
            $table->integer('user_id')->nullable()->unsigned();
            $table->string('total_questions',500)->nullable();
            $table->string('attended_questions',500)->nullable();
            $table->string('not_attended_questions',500)->nullable();
            $table->longText('selected_answers')->nullable();
            $table->string('mark',500)->nullable();
            $table->string('negative_mark',500)->nullable();
            $table->string('remarks',500)->nullable();
            $table->string('written_date')->nullable();            
            $table->foreign('exam_id')->references('id')->on('exams')->onDelete('cascade');    
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
        Schema::dropIfExists('marks');
    }
}
