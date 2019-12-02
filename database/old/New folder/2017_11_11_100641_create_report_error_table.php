<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportErrorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_error', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();             
            $table->string('email')->nullable();             
            $table->string('screen_shot_image')->nullable();            
            $table->longText('content')->nullable();            
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
        Schema::dropIfExists('report_error');
    }
}
