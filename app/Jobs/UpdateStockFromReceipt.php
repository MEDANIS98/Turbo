<?php

namespace App\Jobs;

use App\PartReceipt;
use App\Stock;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class UpdateStockFromReceipt implements ShouldQueue
{
	use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

	public int $receipt_id, $user_id;

	/**
	 * Create a new job instance.
	 *
	 * @return void
	 */
	public function __construct(int $receiptId, int $userId)
	{
		$this->receipt_id = $receiptId;
		$this->user_id = $userId;
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
		$parts = PartReceipt::where('receipt_id', $this->receipt_id)->get();
		foreach ($parts as $part) {
			$stock = Stock::where(['user_id' => $this->user_id, 'part_id' => $part->part_id])->first();
			$stock->quantity -= $part->quantity;
			$stock->save();
		}
	}
}
