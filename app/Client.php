<?php

declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Client extends Model
{
	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}
}
