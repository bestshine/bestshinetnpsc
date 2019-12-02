<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscribePlanMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribe_plan_master', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('main_module_id')->nullable()->unsigned();
            $table->string('name')->nullable(); 
            $table->string('amount')->nullable(); 
            $table->string('duration')->nullable(); 
            $table->string('limit')->nullable(); 
            $table->string('offer_applicable')->nullable(); 
            $table->string('offer_percentage')->nullable(); 
            $table->string('offer_start_date')->nullable(); 
            $table->string('offer_end_date')->nullable();
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
        Schema::dropIfExists('subscribe_plan_master');
    }
}
