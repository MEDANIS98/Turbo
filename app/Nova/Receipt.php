<?php

declare(strict_types=1);

namespace App\Nova;

use App\Nova\Actions\PrintReceipt;
use App\PartReceipt;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use NovaAttachMany\AttachMany;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\BelongsTo;
use Armincms\Fields\BelongsToMany;

class Receipt extends Resource
{
	/**
	 * Get the displayable label of the resource.
	 */
	public static function label(): string
	{
		return __('Receipts');
	}

	/**
	 * Get the displayable singular label of the resource.
	 *
	 * @return string
	 */
	public static function singularLabel()
	{
		return __('Receipt');
	}

	/**
	 * The model the resource corresponds to.
	 *
	 * @var string
	 */
	public static $model = 'App\Receipt';

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
	 * Get the fields displayed by the resource.
	 *
	 * @return array
	 */
	public function fields(Request $request)
	{
		return [
			DateTime::make(__('Created at'), function () {
				return $this->created_at;
			}),
			BelongsTo::make(__('Client'), 'client', 'App\Nova\Client')->showCreateRelationButton(),
			BelongsToMany::make(__('Parts'), 'parts', Part::class)->hideFromIndex()
				->fields(function ($ids) {
					$part_receipt = PartReceipt::where([
						'part_id' => $ids['relatedId'],
						'receipt_id' => $ids['resourceId']
					])->first();
					return [
						Number::make(__('Quantity'), 'quantity')
							->rules('required', 'numeric')->displayUsing(function () use ($part_receipt) {
								return $part_receipt->quantity;
							}),
					];
				})
				->pivots(),
			Number::make(__('Total of parts'), function () {
				return $this->parts()->count();
			}),
			Number::make(__('Total Quantity'), function () {
				$quantity = 0;
				foreach ($this->parts as $part) {
					$quantity += (int) $part->pivot->quantity;
				}
				// Get the quantity of each part in the receipt
				return $quantity;
			}),
			Number::make(__('Total'), function () {
				$price = 0;
				foreach ($this->parts as $part) {
					$price += ($part->price * (int) $part->pivot->quantity);
				}
				// Get the quantity of each part in the receipt
				return $price;
			})
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
		return [
			new PrintReceipt,
		];
	}
}
