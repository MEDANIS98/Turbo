<?php

declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	public function categories()
	{
		return $this->hasMany(self::class);
	}

	public function types()
	{
		return $this->hasMany(Type::class);
	}

	public function getFertileSubCategoriesAttribute()
	{
		return $this->categories()->whereHas('types')->get();
	}

	public function getInfertileSubCategoriesAttribute()
	{
		return $this->categories()->whereDoesntHave('types')->get();
	}

	public function getMegaMenuSizeAttribute(): string
	{
		// xl, lg, md, nl, sm
		$count = $this->categories()->count();
		if ($count >= 9) {
			return 'xl';
		} elseif ($count >= 8) {
			return 'lg';
		} elseif ($count >= 6) {
			return 'md';
		} elseif ($count >= 4) {
			return 'nl';
		} else {
			return 'sm';
		}
	}
}
