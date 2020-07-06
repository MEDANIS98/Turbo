<?php

declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
	public function parts()
	{
		return $this->belongsToMany(Part::class)
			->using(PartReceipt::class)->withPivot('quantity');
	}

	public function client()
	{
		return $this->belongsTo(Client::class);
	}

	public function getTotalAttribute(): float
	{
		return $this->subTotal + $this->vatValue;
	}

	public function getVatValueAttribute()
	{
		$value = $this->subTotal * $this->vat / 100;

		return number_format((float) $value, 2, '.', '');
	}

	// Total of receipt H.T without tax
	public function getSubtotalAttribute(): float
	{
		$price = 0;
		foreach ($this->parts as $part) {
			$price += ($part->price * (int) $part->pivot->quantity);
		}
		// Get the quantity of each part in the receipt
		return $price;
	}
}
