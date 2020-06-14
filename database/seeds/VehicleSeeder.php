<?php

use App\Part;
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
		factory(Vehicle::class, 5)->create()->each(
			fn ($vehicle) => factory(Part::class, 2)->create(['vehicle_id' => $vehicle->id])
		);
	}
}
