<?php

namespace Caddydz\NovaPreviewResource;

use Laravel\Nova\Fields\BooleanGroup;
use Laravel\Nova\Fields\Field;

class NovaPreviewResource extends Field
{
	/**
	 * The field's component.
	 *
	 * @var string
	 */
	public $component = 'nova-preview-resource';

	/**
	 * Set the image for the preview
	 *
	 * @param string image path
	 *
	 * @return $this
	 */
	public function image($path)
	{
		return $this->withMeta([
			'image' => $path
		]);
	}

	/**
	 * Set the title for the preview
	 *
	 * @param string title text
	 *
	 * @return $this
	 */
	public function title($text)
	{
		return $this->withMeta([
			'title' => $text
		]);
	}

	public function list($list)
	{
		return $this->withMeta([
			'list' => $list
		]);
	}

	public function buyPrice($price)
	{
		if (is_callable($price)) {
			$price = $price();
		}

		return $this->withMeta([
			'buyPrice' => $price
		]);
	}

	public function sellPrice($price)
	{
		if (is_callable($price)) {
			$price = $price();
		}

		return $this->withMeta([
			'sellPrice' => $price
		]);
	}

	public function related($related)
	{
		return $this->withMeta([
			'related' => $related
		]);
	}
}
