<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersNotificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_notification', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('module_id')->nullable()->unsigned();
            $table->longText('title')->nullable();
            $table->longText('url')->nullable();
            $table->binary('seen_users_id')->nullable();
            $table->foreign('module_id')->references('id')->on('main_module')->onDelete('cascade');
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
        Schema::dropIfExists('users_notification');
    }
}
