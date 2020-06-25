<?php

declare(strict_types=1);

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use NovaAttachMany\AttachMany;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;

class Invoice extends Resource
{
	/**
	 * Get the displayable label of the resource.
	 */
	public static function label(): string
	{
		return __('Invoices');
	}

	/**
	 * Get the displayable singular label of the resource.
	 *
	 * @return string
	 */
	public static function singularLabel()
	{
		return __('Invoice');
	}

	/**
	 * The model the resource corresponds to.
	 *
	 * @var string
	 */
	public static $model = 'App\Invoice';

	/**
	 * The single value that should be used to represent the resource when being displayed.
	 *
	 * @var string
	 */
	public static $title = 'id';

	/**
	 * The columns that should be searched.
	 *
	 * @var array
	 */
	public static $search = [
		'id',
	];

	/**
	 * Get a fresh instance of the model represented by the resource.
	 */
	public static function newModel()
	{
		$model = static::$model;
		$var = new $model;
		// Set the dafault value for the reception date
		$var->reception_date = now();

		return $var;
	}

	/**
	 * Get the fields displayed by the resource.
	 *
	 * @return array
	 */
	public function fields(Request $request)
	{
		return [
			ID::make()->sortable(),
			DateTime::make(__('Reception Date'), 'reception_date')->required(),
			BelongsTo::make(__('Supplier'), 'supplier', 'App\Nova\Supplier')->showCreateRelationButton(),
			AttachMany::make(__('Parts'), 'parts', 'App\Nova\Part')->showCounts()->showPreview(),
			BelongsToMany::make(__('Parts'), 'parts', 'App\Nova\Part')->fields(function () {
				return [
					Number::make(__('Quantity'), 'quantity'),
				];
			}),
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

	/**
	 * Get the filters available for the resource.
	 *
	 * @return array
	 */
	public function filters(Request $request)
	{
		return [];
	}

	/**
	 * Get the lenses available for the resource.
	 *
	 * @return array
	 */
	public function lenses(Request $request)
	{
		return [];
	}

	/**
	 * Get the actions available for the resource.
	 *
	 * @return array
	 */
	public function actions(Request $request)
	{
		return [];
	}
}
