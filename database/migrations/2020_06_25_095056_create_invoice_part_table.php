<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicePartTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invoice_part', function (Blueprint $table) {
			$table->unsignedBigInteger('part_id');
			$table->unsignedBigInteger('invoice_id');
			$table->integer('quantity');
			$table->double('buy_price');
			$table->double('sell_price');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('invoice_part');
	}
}
