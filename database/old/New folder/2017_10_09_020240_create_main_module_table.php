<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainModuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_module', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('state_id')->nullable();
            $table->integer('board_id')->nullable();
            $table->integer('medium_id')->nullable();            
            $table->string('name')->nullable();
            $table->boolean('status')->nullable();
            $table->string('slug')->nullable();
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
        Schema::dropIfExists('main_module');
    }
}
