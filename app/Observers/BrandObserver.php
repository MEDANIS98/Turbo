<?php

namespace App\Observers;

use App\Brand;

class BrandObserver
{
	/**
	 * Handle the brand "creating" event.
	 *
	 * @param  \App\Brand  $brand
	 * @return void
	 */
	public function creating(Brand $brand)
	{
		$brand->slug = sluggify($brand->name);
	}

	/**
	 * Handle the brand "created" event.
	 *
	 * @param  \App\Brand  $brand
	 * @return void
	 */
	public function created(Brand $brand)
	{
		//
	}

	/**
	 * Handle the brand "updating" event.
	 *
	 * @param  \App\Brand  $brand
	 * @return void
	 */
	public function updating(Brand $brand)
	{
		if ($brand->isDirty('name')) {
			$brand->slug = sluggify($brand->name);
		}
	}

	/**
	 * Handle the brand "updated" event.
	 *
	 * @param  \App\Brand  $brand
	 * @return void
	 */
	public function updated(Brand $brand)
	{
		//
	}

	/**
	 * Handle the brand "deleted" event.
	 *
	 * @param  \App\Brand  $brand
	 * @return void
	 */
	public function deleted(Brand $brand)
	{
		//
	}

	/**
	 * Handle the brand "restored" event.
	 *
	 * @param  \App\Brand  $brand
	 * @return void
	 */
	public function restored(Brand $brand)
	{
		//
	}

	/**
	 * Handle the brand "force deleted" event.
	 *
	 * @param  \App\Brand  $brand
	 * @return void
	 */
	public function forceDeleted(Brand $brand)
	{
		//
	}
}
