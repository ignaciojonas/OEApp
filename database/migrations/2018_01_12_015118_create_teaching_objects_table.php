<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachingObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teaching_objects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('theme');
            $table->text('content');
            $table->text('goal');
            $table->text('approach');
            $table->string('recipients');
            $table->string('date');
            $table->string('place');
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
        Schema::dropIfExists('teaching_objects');
    }
}
