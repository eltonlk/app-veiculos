<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('state_id')->unsigned();
			$table->integer('city_id')->unsigned();
			$table->string('zip');
			$table->string('district');
			$table->string('address');
			$table->string('phone');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->rememberToken();
			$table->integer('account_id')->unsigned();
			$table->softDeletes();
			$table->timestamps();

			$table->foreign('state_id')->references('id')->on('states');
			$table->foreign('city_id')->references('id')->on('cities');
			$table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
		});
	}

	public function down()
	{
		Schema::drop('users');
	}

}
