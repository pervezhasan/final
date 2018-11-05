<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiles', function (Blueprint $table) {
            $table->increments('id');
			$table->string('make');
			$table->string('model');
			$table->string('year');
			$table->string('powervalue');
			$table->string('units');
			$table->string('miles_driven');
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
        Schema::dropIfExists('vehiles');
    }
}
