<?php

declare(strict_types=1);

namespace App\Providers;

use App\Brand;
use App\Part;
use App\Type;
use App\Invoice;
use App\Profile;
use App\Category;
use App\Observers\BrandObserver;
use App\Observers\PartObserver;
use App\Observers\TypeObserver;
use App\Observers\InvoiceObserver;
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
		Invoice::observe(InvoiceObserver::class);
		Brand::observe(BrandObserver::class);
	}
}
