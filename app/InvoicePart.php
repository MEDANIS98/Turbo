<?php

declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoicePart extends Model
{
	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'invoice_part';
}
