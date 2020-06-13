<?php

namespace App\Observers;

use App\Profile;

class ProfileObserver
{
	/**
	 * Handle the profile "created" event.
	 *
	 * @param \App\Profile $profile
	 * @return void
	 */
	public function created(Profile $profile): void
	{
		// Just app/public because the image attribute already includes 'avatars' folder name
		$profile->addMedia(storage_path('app/public/' . $profile->avatar))
			->preservingOriginal()
			->toMediaCollection();
	}
}
