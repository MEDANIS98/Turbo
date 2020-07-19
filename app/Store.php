<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
	/**
	 * Get the user that owns the store.
	 */
	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
