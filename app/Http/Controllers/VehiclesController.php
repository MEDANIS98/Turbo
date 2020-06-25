<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Support\Collection;
use App\Http\Requests\BrandModelsRequest;
use App\Http\Requests\ModelFuelOptionsRequest;

class VehiclesController extends Controller
{
	/**
	 * Get Brands by year.
	 *
	 * Select model names where brand is passed brand
	 *
	 * @param integer \App\Http\Requests\BrandModelsRequest the brand id
	 * @return \Illuminate\Support\Collection $models
	 **/
	public function getModelsByBrand(BrandModelsRequest $request): Collection
	{
		$models = Vehicle::where('brand_id', $request->brand)->select('model')->distinct()->orderBy('brand_id')->pluck('model');

		return $models;
	}

	/**
	 * Get Fuel Options for model.
	 *
	 * Select fuel options where model is passed model
	 *
	 * @param string \App\Http\Requests\ModelFuelOptionsRequest the brand string
	 * @return \Illuminate\Support\Collection $brands
	 **/
	public function getFuelOptionsForModel(ModelFuelOptionsRequest $request): Collection
	{
		$fuels = Vehicle::where('model', $request->model)->select('fuel')->distinct()->pluck('fuel');

		return $fuels;
	}
}
