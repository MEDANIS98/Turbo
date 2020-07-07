<?php

namespace App\Observers;

use App\Review;

class ReviewObserver
{
	/**
	 * Handle the review "creating" event.
	 *
	 * @param  \App\Review  $review
	 * @return void
	 */
	public function creating(Review $review)
	{
		if (auth()->check()) {
			$review->user_id = auth()->id();
		}
	}

	/**
	 * Handle the review "created" event.
	 *
	 * @param  \App\Review  $review
	 * @return void
	 */
	public function created(Review $review)
	{
		//
	}

	/**
	 * Handle the review "updated" event.
	 *
	 * @param  \App\Review  $review
	 * @return void
	 */
	public function updated(Review $review)
	{
		//
	}

	/**
	 * Handle the review "deleted" event.
	 *
	 * @param  \App\Review  $review
	 * @return void
	 */
	public function deleted(Review $review)
	{
		//
	}

	/**
	 * Handle the review "restored" event.
	 *
	 * @param  \App\Review  $review
	 * @return void
	 */
	public function restored(Review $review)
	{
		//
	}

	/**
	 * Handle the review "force deleted" event.
	 *
	 * @param  \App\Review  $review
	 * @return void
	 */
	public function forceDeleted(Review $review)
	{
		//
	}
}
