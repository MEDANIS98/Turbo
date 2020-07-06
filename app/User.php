<?php

declare(strict_types=1);

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * App\User.
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $account_menu_avatar
 * @property-read string $avatar
 * @property-read string $dashboard_avatar
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Order[] $orders
 * @property-read int|null $orders_count
 * @property-read \App\Profile|null $profile
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Supplier[] $suppliers
 * @property-read int|null $suppliers_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable implements MustVerifyEmail
{
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'password', 'phone', 'token', 'google_id', 'provider', 'facebook_id',
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
		if ($this->provider) {
			return $this->profile->avatar;
		}
		$mediaItems = optional($this->profile)->getMedia();
		if (! empty($mediaItems)) {
			return $mediaItems[0]->getFullUrl();
		}

		return '/images/avatar.png';
	}

	public function getAccountMenuAvatarAttribute(): string
	{
		if ($this->provider) {
			return $this->profile->avatar;
		}
		$mediaItems = optional($this->profile)->getMedia();
		if (! empty($mediaItems)) {
			return $mediaItems[0]->getUrl('account_menu');
		}

		return '/images/avatar44x44.png';
	}

	public function getDashboardAvatarAttribute(): string
	{
		if ($this->provider) {
			return $this->profile->avatar;
		}
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

	public function suppliers(): HasMany
	{
		return $this->hasMany(Supplier::class);
	}

	public function workshop()
	{
		return $this->hasOne(Workshop::class);
	}
}
