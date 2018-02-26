<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachingObjectActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teaching_object_activities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('activity_id')->unsigned();
            $table->integer('teaching_object_id')->unsigned();
            $table->timestamps();
            $table->foreign('activity_id')->references('id')->on('activities')->onDelete('cascade');
            $table->foreign('teaching_object_id')->references('id')->on('teaching_objects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teaching_object_activities');
    }
}
