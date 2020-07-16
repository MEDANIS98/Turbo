<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vehicles', function (Blueprint $table) {
			$table->id();
			$table->year('year');
			$table->unsignedBigInteger('brand_id');
			$table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
			$table->string('model');
			$table->enum('fuel', ['electric', 'hybrid', 'diesel', 'gas']);
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
		Schema::dropIfExists('vehicles');
	}
}
