<?php

namespace App\Policies;

use App\Store;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StorePolicy
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
	 * @param \App\User $user
	 * @param \App\Store $store
	 * @return mixed
	 */
	public function view(User $user, Store $store)
	{
		return $user->id == $store->user_id;
	}

	/**
	 * Determine whether the user can create models.
	 *
	 * @param  \App\User  $user
	 * @return mixed
	 */
	public function create(User $user)
	{
		return false;
	}

	/**
	 * Determine whether the user can update the model.
	 *
	 * @param  \App\User  $user
	 * @param  \App\Store  $store
	 * @return mixed
	 */
	public function update(User $user, Store $store)
	{
		return (bool) $user->id == $store->user_id;
	}

	/**
	 * Determine whether the user can delete the model.
	 *
	 * @param  \App\User  $user
	 * @param  \App\Store  $store
	 * @return mixed
	 */
	public function delete(User $user, Store $store)
	{
		return false;
	}

	/**
	 * Determine whether the user can restore the model.
	 *
	 * @param  \App\User  $user
	 * @param  \App\Store  $store
	 * @return mixed
	 */
	public function restore(User $user, Store $store)
	{
		return false;
	}

	/**
	 * Determine whether the user can permanently delete the model.
	 *
	 * @param  \App\User  $user
	 * @param  \App\Store  $store
	 * @return mixed
	 */
	public function forceDelete(User $user, Store $store)
	{
		return false;
	}
}
