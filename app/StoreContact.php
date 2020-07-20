<?php

declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreContact extends Model
{
	/**
	 * The attributes that are spatial fields.
	 *
	 * @var array
	 */
	protected $spatialFields = [
		'location',
	];

	/**
	 * The attributes that should be cast.
	 *
	 * @var array
	 */
	protected $casts = [
		'opening_hours' => 'array',
	];
}
