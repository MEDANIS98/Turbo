<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
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
        if ($mediaItems) {
            return $mediaItems[0]->getFullUrl();
        }
        return '/images/avatar.png';
    }

    public function getAccountMenuAvatarAttribute(): string
    {
        $mediaItems = optional($this->profile)->getMedia();
        if ($mediaItems) {
            return $mediaItems[0]->getUrl('account_menu');
        }
        return '/images/avatar44x44.png';
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
