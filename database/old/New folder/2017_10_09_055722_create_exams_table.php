<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sub_module_id')->nullable()->unsigned();
            $table->string('name',500)->nullable();
            $table->string('exam_date',500)->nullable();                         
            $table->string('time_duration',500)->nullable();                         
            $table->boolean('status')->nullable();
            $table->string('slug')->nullable();
            $table->foreign('sub_module_id')->references('id')->on('sub_module')->onDelete('cascade');
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
        Schema::dropIfExists('exams');
    }
}
