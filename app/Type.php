<?php

declare(strict_types=1);

namespace App;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Type extends Model implements HasMedia
{
	use InteractsWithMedia;

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
		if (! empty($mediaItems)) {
			return $mediaItems[0]->getUrl('_148x148');
		}

		return '/images/avatar44x44.png';
	}
}
