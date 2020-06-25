<?php

declare(strict_types=1);

namespace App\Observers;

use App\Invoice;

class InvoiceObserver
{
	/**
	 * Handle the invoice "creating" event.
	 *
	 * @return void
	 */
	public function creating(Invoice $invoice)
	{
		$invoice->user_id = auth()->id();
	}

	/**
	 * Handle the invoice "created" event.
	 *
	 * @return void
	 */
	public function created(Invoice $invoice)
	{
		//
	}

	/**
	 * Handle the invoice "updated" event.
	 *
	 * @return void
	 */
	public function updated(Invoice $invoice)
	{
		//
	}

	/**
	 * Handle the invoice "deleted" event.
	 *
	 * @return void
	 */
	public function deleted(Invoice $invoice)
	{
		//
	}

	/**
	 * Handle the invoice "restored" event.
	 *
	 * @return void
	 */
	public function restored(Invoice $invoice)
	{
		//
	}

	/**
	 * Handle the invoice "force deleted" event.
	 *
	 * @return void
	 */
	public function forceDeleted(Invoice $invoice)
	{
		//
	}
}
