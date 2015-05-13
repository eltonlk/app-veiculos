<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration {

	public function up()
	{
		Schema::create('vehicles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('brand_id')->unsigned();
			$table->integer('kind_id')->unsigned();
			$table->string('model');
			$table->string('color');
			$table->integer('year');
			$table->decimal('amount', 13, 2)->default(0);
      $table->date('purchased_in');
      $table->date('sold')->nullable();
      $table->text('description')->nullable();
			$table->integer('account_id')->unsigned();
			$table->timestamps();

			$table->foreign('brand_id')->references('id')->on('vehicle_brands');
			$table->foreign('kind_id')->references('id')->on('vehicle_kinds');
			$table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
		});
	}

	public function down()
	{
		Schema::drop('vehicles');
	}

}
