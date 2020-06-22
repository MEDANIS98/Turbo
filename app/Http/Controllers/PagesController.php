<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Part;
use App\Vehicle;
use Illuminate\View\View;

class PagesController extends Controller
{
	/**
	 * Index page.
	 *
	 * Return the index view
	 * compacting data that includes
	 * Distinct vehicle years, brands, models and fuel types
	 *
	 * @return \Illuminate\View\View $view The index view
	 **/
	public function index(): View
	{
		$years = Vehicle::select('year')->distinct()->orderBy('year')->pluck('year');
		// Get new arrivals
		$new_parts = Part::latest()->get();
		// Get their types
		return view('index', compact('years', 'new_parts'));
	}
}
