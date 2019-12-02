<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubModuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_module', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('main_module_id')->nullable()->unsigned();
            $table->string('name')->nullable();
            $table->boolean('status')->nullable();
            $table->string('slug')->nullable();
            $table->foreign('main_module_id')->references('id')->on('main_module')->onDelete('cascade');  
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
        Schema::dropIfExists('sub_module');
    }
}
