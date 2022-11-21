<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGeogebraToResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('resources', function (Blueprint $table) {
          $table->string('geogebra_id')->nullable();
          $table->string('geogebra_type')->nullable();

      
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('resources', function (Blueprint $table) {
          $table->string('geogebra_id')->nullable();
          $table->string('geogebra_type')->nullable();

            //
        });
    }
}
