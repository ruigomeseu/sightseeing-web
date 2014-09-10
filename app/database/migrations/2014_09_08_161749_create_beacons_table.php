<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeaconsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('beacons', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->integer('sight_id')->unsigned();
            $table->foreign('sight_id')->references('id')->on('sights');
            $table->string('UUID');
            $table->integer('major');
            $table->integer('minor');
            $table->timestamp('installed_at')->nullable();
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
        Schema::drop('beacons');
	}

}
