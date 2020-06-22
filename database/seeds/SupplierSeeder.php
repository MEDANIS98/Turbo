<?php

declare(strict_types=1);

use App\User;
use App\Supplier;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$ids = User::select('id')->pluck('id');
		foreach ($ids as $id) {
			factory(Supplier::class, 50)->create(['user_id' => $id]);
		}
	}
}
