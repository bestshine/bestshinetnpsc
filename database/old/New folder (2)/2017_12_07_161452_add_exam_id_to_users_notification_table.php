<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExamIdToUsersNotificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users_notification', function (Blueprint $table) {
            $table->integer('sub_module_id')->after('module_id')->nullable()->unsigned();
            $table->integer('exam_id')->after('sub_module_id')->nullable()->unsigned();
            $table->foreign('sub_module_id')->references('id')->on('sub_module')->onDelete('cascade');
            $table->foreign('exam_id')->references('id')->on('exams')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users_notification', function (Blueprint $table) {
            //
        });
    }
}
