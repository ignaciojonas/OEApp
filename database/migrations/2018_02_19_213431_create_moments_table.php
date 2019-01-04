<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMomentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('briefDescription');
            $table->string('procedure');
            $table->string('forecastDevelopment')-> nullable();
            $table->string('recordsTeachers')-> nullable();
            $table->string('resourceStudents')-> nullable();
            $table->string('classroomRecords')-> nullable();
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
        Schema::dropIfExists('moments');
    }
}
