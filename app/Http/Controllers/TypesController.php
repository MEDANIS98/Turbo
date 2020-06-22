<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Type;
use App\Category;
use Illuminate\Http\Request;

class TypesController extends Controller
{
	public function getTypesByCategory(Request $request)
	{
		$request->validate(['category' => 'required|integer|exists:categories,id']);

		return Category::find($request->category)->types;
	}

	public function show(Type $type)
	{
		// TODO: Return a view containing parts of passed type
		return $type;
	}
}
