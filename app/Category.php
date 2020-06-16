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
}
