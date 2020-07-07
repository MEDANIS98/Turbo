<?php

declare(strict_types=1);

namespace App\Observers;

use App\Part;

class PartObserver
{
	/**
	 * Handle the part "creation" event.
	 */
	public function creating(Part $part): void
	{
		$part->slug = sluggify($part->title);
		$part->excerpt = str_limit($part->description, 200);
		if (!$part->user_id && auth()->check()) {
			$part->user_id = auth()->id();
		}
	}

	/**
	 * Handle the part "created" event.
	 */
	public function created(Part $part): void
	{
		// Just app/public because the image attribute already includes 'parts' folder name
		if ($part->image) {
			$part->addMedia(storage_path('app/public/' . $part->image))
				->preservingOriginal()
				->toMediaCollection();
		}
	}

	/**
	 * Handle the part "updated" event.
	 *
	 * @return void
	 */
	public function updated(Part $part)
	{
		if ($part->isDirty('title')) {
			$part->slug = sluggify($part->title);
			$part->save();
		}
		if ($part->isDirty('description')) {
			$part->excerpt = str_limit($part->description, 200);
		}
		// Just app/public because the image attribute already includes 'parts' folder name
		if ($part->isDirty('image')) {
			$part->addMedia(storage_path('app/public/' . $part->image))
				->preservingOriginal()
				->toMediaCollection();
		}
	}
}
