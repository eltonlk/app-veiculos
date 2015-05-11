<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatesTable extends Migration {

	public function up()
	{
		Schema::create('states', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('abbr');
			$table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('states');
	}

}
