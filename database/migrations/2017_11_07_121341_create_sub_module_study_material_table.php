<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubModuleStudyMaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_module_study_material', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sub_module_id')->nullable()->unsigned();
            $table->string('name')->nullable();
            $table->string('url')->nullable();
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
        Schema::dropIfExists('sub_module_study_material');
    }
}
