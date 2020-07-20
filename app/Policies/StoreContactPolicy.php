<?php

namespace App\Policies;

use App\StoreContact;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StoreContactPolicy
{
	use HandlesAuthorization;

	/**
	 * Determine whether the user can view any models.
	 *
	 * @param  \App\User  $user
	 * @return mixed
	 */
	public function viewAny(User $user)
	{
		return $user->has('store')->exists();
	}

	/**
	 * Determine whether the user can view the model.
	 *
	 * @param  \App\User  $user
	 * @param  \App\StoreContact  $storeContact
	 * @return mixed
	 */
	public function view(User $user, StoreContact $storeContact)
	{
		return $storeContact->store_id == $user->store->id;
	}

	/**
	 * Determine whether the user can create models.
	 *
	 * @param  \App\User  $user
	 * @return mixed
	 */
	public function create(User $user)
	{
		return !$user->store->has('contact')->exists();
	}

	/**
	 * Determine whether the user can update the model.
	 *
	 * @param  \App\User  $user
	 * @param  \App\StoreContact  $storeContact
	 * @return mixed
	 */
	public function update(User $user, StoreContact $storeContact)
	{
		return $storeContact->store_id == $user->store->id;
	}

	/**
	 * Determine whether the user can delete the model.
	 *
	 * @param  \App\User  $user
	 * @param  \App\StoreContact  $storeContact
	 * @return mixed
	 */
	public function delete(User $user, StoreContact $storeContact)
	{
		return false;
	}

	/**
	 * Determine whether the user can restore the model.
	 *
	 * @param  \App\User  $user
	 * @param  \App\StoreContact  $storeContact
	 * @return mixed
	 */
	public function restore(User $user, StoreContact $storeContact)
	{
		return false;
	}

	/**
	 * Determine whether the user can permanently delete the model.
	 *
	 * @param  \App\User  $user
	 * @param  \App\StoreContact  $storeContact
	 * @return mixed
	 */
	public function forceDelete(User $user, StoreContact $storeContact)
	{
		return false;
	}
}
