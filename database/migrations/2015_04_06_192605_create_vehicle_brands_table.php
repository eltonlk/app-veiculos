<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleBrandsTable extends Migration {

	public function up()
	{
		Schema::create('vehicle_brands', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('account_id')->unsigned();
			$table->softDeletes();
			$table->timestamps();

			$table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
		});
	}

	public function down()
	{
		Schema::drop('vehicle_brands');
	}

}
