<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parts', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('vehicle_id');
			$table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('cascade');
			$table->unsignedBigInteger('type_id');
			$table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
			$table->string('title');
			$table->longText('description')->nullable();
			$table->string('image');
			$table->decimal('price');
			$table->decimal('old_price')->nullable();
			$table->string('slug');
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
		Schema::dropIfExists('parts');
	}
}
