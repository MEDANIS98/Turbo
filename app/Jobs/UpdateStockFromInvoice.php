<?php

namespace App\Jobs;

use App\Stock;
use App\InvoicePart;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class UpdateStockFromInvoice implements ShouldQueue
{
	use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

	public int $invoice_id, $user_id;

	/**
	 * Create a new job instance.
	 *
	 * @param int $invoiceId
	 * @return void
	 */
	public function __construct(int $invoiceId, int $userId)
	{
		$this->user_id = $userId;
		$this->invoice_id = $invoiceId;
	}

	/**
	 * Execute the job.
	 *
	 * @return void
	 */
	public function handle()
	{
		// loop through the parts in the invoice
		// get their quantity and update the stock accordingly
		$parts = InvoicePart::where('invoice_id', $this->invoice_id)->get();
		foreach ($parts as $part) {
			$stock = Stock::firstOrCreate([
				'user_id' => $this->user_id,
				'part_id' => $part->part_id,
			], ['quantity' => 0]);
			$stock->quantity += $part->quantity;
			$stock->save();
		}
	}
}
