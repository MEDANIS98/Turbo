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
		$price = 0;
		foreach ($this->parts as $part) {
			$price += ($part->price * (int) $part->pivot->quantity);
		}
		// Get the quantity of each part in the receipt
		return $price;
	}
}
