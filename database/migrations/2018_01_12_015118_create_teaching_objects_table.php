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
            $table->string('title')->required();
            $table->string('theme')->nullable();
            $table->text('content')->nullable();
            $table->text('goal')->nullable();
            $table->text('previousKnowledge')->nullable();
            $table->text('didacticIntentionality')->nullable();
            $table->string('receiver')->nullable();
            $table->string('date')->nullable();
            $table->string('place')->nullable();
            $table->text('generalDescription')->nullable();
            $table->text('teachingArea')->nullable();
            $table->text('reflection')->nullable();
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
