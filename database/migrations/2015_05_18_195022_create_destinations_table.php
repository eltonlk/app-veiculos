<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinationsTable extends Migration {

	public function up()
	{
		Schema::create('destinations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('vehicle_id')->unsigned();
			$table->string('address');
			$table->string('district');
			$table->integer('state_id')->unsigned();
			$table->integer('city_id')->unsigned();
      $table->text('description')->nullable();
			$table->integer('account_id')->unsigned();
			$table->timestamps();

			$table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('cascade');
			$table->foreign('state_id')->references('id')->on('states');
			$table->foreign('city_id')->references('id')->on('cities');
			$table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
		});
	}

	public function down()
	{
		Schema::drop('destinations');
	}

}
