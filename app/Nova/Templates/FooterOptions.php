<?php

declare(strict_types=1);

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Whitecube\NovaPage\Pages\Template;

class FooterOptions extends Template
{
	protected $jsonAttributes = ['comment'];

	/**
	 * Get the fields displayed by the resource.
	 *
	 * @return array
	 */
	public function fields(Request $request)
	{
		return [
			Text::make(__('Commentaire'), 'comment')->translatable(),
			Text::make(__('Email Address'), 'email'),
			Text::make(__('Location Address'), 'address'),
			Text::make(__('Working Hours'), 'schedule'),
		];
	}

	/**
	 * Get the cards available for the request.
	 *
	 * @return array
	 */
	public function cards(Request $request)
	{
		return [];
	}
}
