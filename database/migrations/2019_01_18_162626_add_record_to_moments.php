<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRecordToMoments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('moments', function($table) {
          $table->dropColumn('recordsTeachers');
          $table->dropColumn('classroomRecords');
          $table->integer('teachers_record_id')->nullable();
          $table->integer('classroom_record_id')->nullable();
          $table->foreign('teachers_record_id')->references('id')->on('records')->onDelete('cascade');
          $table->foreign('classroom_record_id')->references('id')->on('records')->onDelete('cascade');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('moments', function($table) {
        $table->dropColumn('teachers_record_id');
        $table->dropColumn('classroom_record_id');
        $table->string('recordsTeachers')->nullable();
        $table->string('classroomRecords')->nullable();
      });
    }
}
