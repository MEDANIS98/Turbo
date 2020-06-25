<?php

declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
	protected $guarded = [];

	protected $casts = [
		'reception_date' => 'date',
	];

	public function parts()
	{
		return $this->belongsToMany(Part::class);
	}

	public function supplier()
	{
		return $this->belongsTo(Supplier::class);
	}
}
