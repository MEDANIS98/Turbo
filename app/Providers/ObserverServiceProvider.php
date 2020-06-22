<?php

declare(strict_types=1);

namespace App\Providers;

use App\Type;
use App\Part;
use App\Profile;
use App\Category;
use App\Observers\PartObserver;
use App\Observers\TypeObserver;
use App\Observers\ProfileObserver;
use App\Observers\CategoryObserver;
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
		Type::observe(TypeObserver::class);
		Category::observe(CategoryObserver::class);
	}
}
