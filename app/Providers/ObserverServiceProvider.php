<?php

namespace App\Providers;

use App\Part;
use App\Profile;
use App\Observers\PartObserver;
use App\Observers\ProfileObserver;
use Illuminate\Support\ServiceProvider;

class ObserverServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot()
	{
		Part::observe(PartObserver::class);
		Profile::observe(ProfileObserver::class);
	}
}
