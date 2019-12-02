<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable()->unsigned();
            $table->integer('main_module_id')->nullable()->unsigned();
            $table->string('plan_name',500)->nullable();
            $table->string('plan_amount',500)->nullable();
            $table->string('payment_date')->nullable();               
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('payments');
    }
}
