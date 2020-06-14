<?php

declare(strict_types=1);

namespace App;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Profile extends Model implements HasMedia
{
	use InteractsWithMedia;

	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}

	public function registerMediaConversions(Media $media = null): void
	{
		$this->addMediaConversion('account_menu')
			->width(44)
			->height(44)
			->sharpen(10);
	}
}
