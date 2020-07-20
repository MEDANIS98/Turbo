<?php

namespace App\Observers;

use App\StoreContact;

class StoreContactObserver
{
	/**
	 * Handle the store contact "creating" event.
	 *
	 * @param  \App\StoreContact  $storeContact
	 * @return void
	 */
	public function creating(StoreContact $storeContact)
	{
		$storeContact->store_id = auth()->user()->store->id;
	}

	/**
	 * Handle the store contact "created" event.
	 *
	 * @param  \App\StoreContact  $storeContact
	 * @return void
	 */
	public function created(StoreContact $storeContact)
	{
		//
	}

	/**
	 * Handle the store contact "updated" event.
	 *
	 * @param  \App\StoreContact  $storeContact
	 * @return void
	 */
	public function updated(StoreContact $storeContact)
	{
		//
	}

	/**
	 * Handle the store contact "deleted" event.
	 *
	 * @param  \App\StoreContact  $storeContact
	 * @return void
	 */
	public function deleted(StoreContact $storeContact)
	{
		//
	}

	/**
	 * Handle the store contact "restored" event.
	 *
	 * @param  \App\StoreContact  $storeContact
	 * @return void
	 */
	public function restored(StoreContact $storeContact)
	{
		//
	}

	/**
	 * Handle the store contact "force deleted" event.
	 *
	 * @param  \App\StoreContact  $storeContact
	 * @return void
	 */
	public function forceDeleted(StoreContact $storeContact)
	{
		//
	}
}
