<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSightImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('sight_images', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('sight_id')->unsigned();
            $table->foreign('sight_id')->references('id')->on('sights');
            $table->string('path');
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
        Schema::drop('sight_images');
	}

}
