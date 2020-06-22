<?php

declare(strict_types=1);

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'password',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	/**
	 * The attributes that should be cast to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'email_verified_at' => 'datetime',
	];

	public function profile(): HasOne
	{
		return $this->hasOne(Profile::class);
	}

	public function getAvatarAttribute(): string
	{
		$mediaItems = optional($this->profile)->getMedia();
		if (! empty($mediaItems)) {
			return $mediaItems[0]->getFullUrl();
		}

		return '/images/avatar.png';
	}

	public function getAccountMenuAvatarAttribute(): string
	{
		$mediaItems = optional($this->profile)->getMedia();
		if (! empty($mediaItems)) {
			return $mediaItems[0]->getUrl('account_menu');
		}

		return '/images/avatar44x44.png';
	}

	public function getDashboardAvatarAttribute(): string
	{
		$mediaItems = optional($this->profile)->getMedia();
		if (! empty($mediaItems)) {
			return $mediaItems[0]->getUrl('dashboard');
		}

		return '/images/avatar.png'; // Default 90x90
	}

	public function orders(): HasMany
	{
		return $this->hasMany(Order::class);
	}
}
