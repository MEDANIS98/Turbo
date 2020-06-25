<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'year' => 'bail|required|integer|exists:vehicles,year',
			'brand' => 'bail|required|integer|exists:brands,id',
			'model' => 'bail|required|string|exists:vehicles,model',
			'fuel' => 'bail|required|string|exists:vehicles,fuel',
		];
	}
}
