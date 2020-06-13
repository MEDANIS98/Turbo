<?php

namespace App;

use Laravel\Scout\Searchable;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Part extends Model implements HasMedia
{
	use Searchable, InteractsWithMedia;

	/**
	 * Get the vehicle of a part
	 *
	 * Defines the Part to Vehicle relationship
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 **/
	public function vehicle(): BelongsTo
	{
		return $this->belongsTo(Vehicle::class);
	}

	/**
	 * Get the index name for the model.
	 *
	 * @return string
	 */
	public function searchableAs(): string
	{
		return 'parts_index';
	}

	/**
	 * Get the indexable data array for the model.
	 *
	 * @return array
	 */
	public function toSearchableArray(): array
	{
		$vehicle = $this->vehicle->only('year', 'brand', 'model', 'fuel');

		$part = $this->only('title', 'image', 'price');

		$searchable = array_merge($part, $vehicle);

		return $searchable;
	}

	/**
	 * Get the value used to index the model.
	 *
	 * @return mixed
	 */
	public function getScoutKey(): string
	{
		return $this->title;
	}

	/**
	 * Get the key name used to index the model.
	 *
	 * @return mixed
	 */
	public function getScoutKeyName(): string
	{
		return 'title';
	}

	/**
	 * Get the route key for the model.
	 *
	 * @return string
	 */
	public function getRouteKeyName(): string
	{
		return 'slug';
	}

	public function registerMediaConversions(Media $media = null): void
	{
		$this->addMediaConversion('_245x245')
			->width(245)
			->height(245)
			->sharpen(10);
	}
}
