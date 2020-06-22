<?php

declare(strict_types=1);

namespace App;

use Exception;
use Laravel\Scout\Searchable;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Gloudemans\Shoppingcart\CanBeBought;
use Spatie\MediaLibrary\InteractsWithMedia;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Part extends Model implements HasMedia, Buyable
{
	use Searchable, InteractsWithMedia, CanBeBought;

	public function getBuyableIdentifier($options = null)
	{
		return $this->id;
	}

	public function getBuyableDescription($options = null)
	{
		return $this->title;
	}

	public function getBuyablePrice($options = null)
	{
		return $this->price;
	}

	public function getBuyableWeight($options = null)
	{
		return 0;
	}

	/**
	 * Get the vehicle of a part.
	 *
	 * Defines the Part to Vehicle relationship
	 *
	 **/
	public function vehicle(): BelongsTo
	{
		return $this->belongsTo(Vehicle::class);
	}

	/**
	 * Get the index name for the model.
	 */
	public function searchableAs(): string
	{
		return 'parts_index';
	}

	/**
	 * Get the indexable data array for the model.
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
		$this->addMediaConversion('_40x40')
			->width(40)
			->height(40)
			->sharpen(10);
		$this->addMediaConversion('_70x70')
			->width(70)
			->height(70)
			->sharpen(10);
		$this->addMediaConversion('_92x92')
			->width(70)
			->height(70)
			->sharpen(10);
	}

	public function getIndexImageAttribute(): string
	{
		$mediaItems = $this->getMedia();
		if (! empty($mediaItems)) {
			return $mediaItems[0]->getUrl('_245x245');
		}

		return '/images/avatar44x44.png';
	}

	public function getCartHeaderImageAttribute(): string
	{
		$mediaItems = $this->getMedia();
		if (! empty($mediaItems)) {
			return $mediaItems[0]->getUrl('_70x70');
		}

		return '/images/avatar44x44.png';
	}

	public function getNewArrivalImageAttribute(): string
	{
		$mediaItems = $this->getMedia();
		if (! empty($mediaItems)) {
			try {
				return $mediaItems[0]->getUrl('_92x92');
			} catch (Exception $ex) {
				return '/images/avatar44x44.png';
			}
		}

		return '/images/avatar44x44.png';
	}
}
