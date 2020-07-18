<?php

declare(strict_types=1);

namespace App\Observers;

use App\User;

class UserObserver
{
	/**
	 * Handle the user "created" event.
	 *
	 * @return void
	 */
	public function created(User $user)
	{
		//
	}

	/**
	 * Handle the user "updating" event.
	 *
	 * @return void
	 */
	public function updating(User $user)
	{
		if ($user->isDirty('email')) {
			$user->email_verified_at = null;
		}
	}

	/**
	 * Handle the user "updated" event.
	 *
	 * @return void
	 */
	public function updated(User $user)
	{
		if ($user->isDirty('email')) {
			$user->sendEmailVerificationNotification();
		}
	}

	/**
	 * Handle the user "deleted" event.
	 *
	 * @return void
	 */
	public function deleted(User $user)
	{
		//
	}

	/**
	 * Handle the user "restored" event.
	 *
	 * @return void
	 */
	public function restored(User $user)
	{
		//
	}

	/**
	 * Handle the user "force deleted" event.
	 *
	 * @return void
	 */
	public function forceDeleted(User $user)
	{
		//
	}
}
