<?php

declare(strict_types=1);

namespace App\Providers;

use App\Category;
use App\Nova\Templates\HeaderOptions;
use Gloudemans\Shoppingcart\Facades\Cart;
use Whitecube\NovaPage\Pages\Manager;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot(Manager $pages)
	{
		$pages->register('option', 'header', HeaderOptions::class);
		view()->composer('layouts.header.navbar', function ($view) {
			$categories = Category::where('category_id', null)->get();
			$view->with('categories', $categories);
		});
		view()->composer('layouts.header.cart', fn ($view) => $view->with('cart', Cart::content()));
	}
}
