<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vehicle extends Model
{
	use Searchable;

	/**
	 * Get the index name for the model.
	 *
	 * @return string
	 */
	public function searchableAs()
	{
		return 'vehicles_index';
	}

	/**
	 * Get the indexable data array for the model.
	 *
	 * @return array
	 */
	public function toSearchableArray()
	{
		$array = $this->only('brand', 'model', 'year', 'fuel');

		return $array;
	}

	/**
	 * Get the value used to index the model.
	 *
	 * @return mixed
	 */
	public function getScoutKey()
	{
		return $this->model;
	}

	/**
	 * Get the key name used to index the model.
	 *
	 * @return mixed
	 */
	public function getScoutKeyName()
	{
		return 'model';
	}

	/**
	 * Get parts of vehicle
	 *
	 * Defines the hasMany relationship
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 **/
	public function parts(): HasMany
	{
		return $this->hasMany(Part::class);
	}
}
