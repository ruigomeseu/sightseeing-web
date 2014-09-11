<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckinsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('checkins', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('sight_id')->unsigned();
            $table->foreign('sight_id')->references('id')->on('sights');
            $table->string('country');
            $table->string('mac_address');
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
        Schema::drop('checkins');
    }

}
