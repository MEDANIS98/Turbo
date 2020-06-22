<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Part;
use App\Vehicle;
use App\Category;
use Illuminate\Http\Request;

class PartsController extends Controller
{
	/**
	 * Display a listing of the parts.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$vehicles = Vehicle::select('model', 'id')->get();
		$categories = Category::select('name', 'id')->get();
		$parts = Part::where('user_id', auth()->id())->limit(4)->get();
		return view('garage', compact('vehicles', 'categories', 'parts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$request->validate([
			'vehicle' => 'nullable|integer|exists:vehicles,id',
			'type' => 'nullable|integer|exists:types,id',
			'title' => 'required|string|max:50',
			'description' => 'nullable|string|min:5|max:1000',
			'image' => 'nullable|image|max:10000',
			'price' => 'required|integer|min:10|max:1000000',
			'sku' => 'nullable|string|min:6|max:20'
		]);
		$part = new Part();
		$part->vehicle_id = $request->vehicle;
		$part->type_id = $request->type;
		$part->title = $request->title;
		$part->description = $request->description;
		if ($request->file('image')) {
			$path = $request->file('image')->store('parts', 'public');
			$part->image = $path;
		}
		$part->price = $request->price;
		$part->sku = $request->sku;
		$part->save();
		return back();
	}

	/**
	 * Display the specified resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show(Part $part)
	{
		return view('part', compact('part'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Part $part)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Part $part)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Part $part)
	{
		//
	}
}
