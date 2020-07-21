<?php

namespace App\Observers;

use App\Store;

class StoreObserver
{
	/**
	 * Handle the store "creating" event.
	 *
	 * @param  \App\Store  $store
	 * @return void
	 */
	public function creating(Store $store)
	{
		$store->slug = sluggify($store->name);
	}

	/**
	 * Handle the store "created" event.
	 *
	 * @param  \App\Store  $store
	 * @return void
	 */
	public function created(Store $store)
	{
		//
	}

	/**
	 * Handle the store "updating" event.
	 *
	 * @param  \App\Store  $store
	 * @return void
	 */
	public function updating(Store $store)
	{
		if ($store->isDirty('title')) {
			$store->slug = sluggify($store->title);
		}
	}

	/**
	 * Handle the store "updated" event.
	 *
	 * @param  \App\Store  $store
	 * @return void
	 */
	public function updated(Store $store)
	{
		//
	}

	/**
	 * Handle the store "deleted" event.
	 *
	 * @param  \App\Store  $store
	 * @return void
	 */
	public function deleted(Store $store)
	{
		//
	}

	/**
	 * Handle the store "restored" event.
	 *
	 * @param  \App\Store  $store
	 * @return void
	 */
	public function restored(Store $store)
	{
		//
	}

	/**
	 * Handle the store "force deleted" event.
	 *
	 * @param  \App\Store  $store
	 * @return void
	 */
	public function forceDeleted(Store $store)
	{
		//
	}
}
