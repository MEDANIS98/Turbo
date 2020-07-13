<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Compatibility extends Pivot
{
	/**
	 * Indicates if the IDs are auto-incrementing.
	 *
	 * @var bool
	 */
	public $incrementing = true;

	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'compatibilities';

	public function part()
	{
		return $this->belongsTo(Part::class);
	}

	public function vehicles()
	{
		return $this->hasMany(Vehicle::class);
	}
}
