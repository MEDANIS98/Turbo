<?php

declare(strict_types=1);

namespace App\Providers;

use App\Category;
use App\Nova\Templates\HeaderOptions;
use Whitecube\NovaPage\Pages\Manager;
use Illuminate\Support\ServiceProvider;
use Gloudemans\Shoppingcart\Facades\Cart;

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
		view()->composer(['layouts.header.navbar', 'partials.mobile_menu_links'], function ($view) {
			// Get parent categories which have sub categories
			$categories = Category::where('category_id', null)->whereHas('categories')->get();
			// Get parent categories which don't have subcategories
			$infertile_categories = Category::where('category_id', null)->whereDoesntHave('categories')->get();
			$view->with(['categories' => $categories, 'infertile_categories' => $infertile_categories]);
		});
		view()->composer('layouts.header.cart', fn ($view) => $view->with('cart', Cart::content()));
	}
}
