<?php

declare(strict_types=1);

namespace App\Nova\Receipt;

use App\Stock;
use App\Nova\Part as NovaPart;
use Laravel\Nova\Http\Requests\NovaRequest;

class Part extends NovaPart
{
	/**
	 * Build an "index" query for the given resource.
	 *
	 * @param  \Illuminate\Database\Eloquent\Builder  $query
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public static function indexQuery(NovaRequest $request, $query)
	{
		return $query->where('user_id', auth()->id());
	}

	/**
	 * Build a "relatable" query for the given resource.
	 *
	 * This query determines which instances of the model may be attached to other resources.
	 *
	 * @param  \Illuminate\Database\Eloquent\Builder  $query
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public static function relatableQuery(NovaRequest $request, $query)
	{
		$parts_in_stock = Stock::where('user_id', auth()->id())->select('part_id')->pluck('part_id')->toArray();

		return parent::relatableQuery($request, $query->whereIn('id', $parts_in_stock));
	}
}
