<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleKindsTable extends Migration {

	public function up()
	{
		Schema::create('vehicle_kinds', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('account_id')->unsigned();
			$table->softDeletes();
			$table->timestamps();

			$table->foreign('account_id')->references('id')->on('accounts');
		});
	}

	public function down()
	{
		Schema::drop('vehicle_kinds');
	}

}
