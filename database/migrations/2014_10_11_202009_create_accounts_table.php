<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration {

	public function up()
	{
		Schema::create('accounts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('state_id')->unsigned();
			$table->integer('city_id')->unsigned();
			$table->string('zip');
			$table->string('district');
			$table->string('address');
			$table->string('email');
			$table->string('phone');
			$table->timestamps();

			$table->foreign('state_id')->references('id')->on('states');
			$table->foreign('city_id')->references('id')->on('cities');
		});
	}

	public function down()
	{
		Schema::drop('accounts');
	}

}
