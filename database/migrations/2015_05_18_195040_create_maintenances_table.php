<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaintenancesTable extends Migration {

	public function up()
	{
		Schema::create('maintenances', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('vehicle_id')->unsigned();
			$table->text('description');
			$table->decimal('amount', 13, 2)->default(0);
			$table->integer('account_id')->unsigned();
			$table->timestamps();

			$table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('cascade');
			$table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
		});
	}

	public function down()
	{
		Schema::drop('maintenances');
	}

}
