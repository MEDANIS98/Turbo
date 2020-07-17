<?php

namespace App\Policies;

use App\User;
use App\Stock;
use Illuminate\Auth\Access\HandlesAuthorization;

class StockPolicy
{
	use HandlesAuthorization;

	/**
	 * Determine whether the user can view any stocks.
	 *
	 * @param  \App\User  $user
	 * @return mixed
	 */
	public function viewAny(User $user)
	{
		return $user->has('stocks');
	}

	/**
	 * Determine whether the user can view the stock.
	 *
	 * @param  \App\User  $user
	 * @param  \App\Stock  $stock
	 * @return mixed
	 */
	public function view(User $user, Stock $stock)
	{
		return $stock->user_id = $user->id;
	}

	/**
	 * Determine whether the user can create stocks.
	 *
	 * @param  \App\User  $user
	 * @return mixed
	 */
	public function create(User $user)
	{
		return true;
	}

	/**
	 * Determine whether the user can update the stock.
	 *
	 * @param  \App\User  $user
	 * @param  \App\Stock  $stock
	 * @return mixed
	 */
	public function update(User $user, Stock $stock)
	{
		return true;
	}

	/**
	 * Determine whether the user can delete the stock.
	 *
	 * @param  \App\User  $user
	 * @param  \App\Stock  $stock
	 * @return mixed
	 */
	public function delete(User $user, Stock $stock)
	{
		return false;
	}

	/**
	 * Determine whether the user can restore the stock.
	 *
	 * @param  \App\User  $user
	 * @param  \App\Stock  $stock
	 * @return mixed
	 */
	public function restore(User $user, Stock $stock)
	{
		return true;
	}

	/**
	 * Determine whether the user can permanently delete the stock.
	 *
	 * @param  \App\User  $user
	 * @param  \App\Stock  $stock
	 * @return mixed
	 */
	public function forceDelete(User $user, Stock $stock)
	{
		return false;
	}
}
