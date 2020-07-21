<?php

declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

	/**
	 * The store which the contact page belongs to.
	 *
	 * @return \App\Store $store
	 */
	public function store(): BelongsTo
	{
		return $this->belongsTo(Store::class);
	}
}
