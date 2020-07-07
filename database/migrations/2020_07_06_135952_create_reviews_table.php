<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reviews', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('part_id');
			$table->foreign('part_id')->references('id')->on('parts')->onDelete('cascade');
			$table->unsignedBigInteger('user_id')->nullable();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->string('name')->nullable();
			$table->string('email')->nullable();
			$table->text('content')->nullable();
			$table->tinyInteger('rating')->default(0);
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
		Schema::dropIfExists('reviews');
	}
}
