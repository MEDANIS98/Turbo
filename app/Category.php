<?php

declare(strict_types=1);

namespace App;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Category extends Model implements HasMedia
{
	use InteractsWithMedia;

	public function categories()
	{
		return $this->hasMany(self::class);
	}

	public function types()
	{
		return $this->hasMany(Type::class);
	}

	public function parts()
	{
		return $this->hasManyThrough(Part::class, Type::class);
	}

	public function getFertileSubCategoriesAttribute()
	{
		return $this->categories()->whereHas('types')->get();
	}

	public function getInfertileSubCategoriesAttribute()
	{
		return $this->categories()->whereDoesntHave('types')->get();
	}

	public function getMegaMenuSizeAttribute(): string
	{
		// xl, lg, md, nl, sm
		$count = $this->categories()->count();
		if ($count >= 9) {
			return 'xl';
		} elseif ($count >= 8) {
			return 'lg';
		} elseif ($count >= 6) {
			return 'md';
		} elseif ($count >= 4) {
			return 'nl';
		} else {
			return 'sm';
		}
	}

	public function getRouteKeyName(): string
	{
		return 'slug';
	}

	public function registerMediaConversions(Media $media = null): void
	{
		$this->addMediaConversion('_148x148')
			->width(148)
			->height(148)
			->sharpen(10);
	}

	public function getSubCategoryImageAttribute(): string
	{
		$mediaItems = $this->getMedia();
		if (!empty($mediaItems)) {
			return $mediaItems[0]->getUrl('_148x148');
		}

		return '/images/avatar44x44.png';
	}
}
