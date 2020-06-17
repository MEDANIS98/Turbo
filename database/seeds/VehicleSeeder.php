<?php

declare(strict_types=1);

use App\Vehicle;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		factory(Vehicle::class, 2)->create();
	}
}
