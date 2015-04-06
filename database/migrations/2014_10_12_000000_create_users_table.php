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
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->rememberToken();
			$table->boolean('admin');
			$table->integer('account_id')->unsigned();
			$table->softDeletes();
			$table->timestamps();

			$table->foreign('account_id')->references('id')->on('accounts');
		});
	}

	public function down()
	{
		Schema::drop('users');
	}

}
