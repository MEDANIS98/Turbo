<?php

declare(strict_types=1);

use App\Part;
use App\Type;
use App\Vehicle;
use Illuminate\Database\Seeder;

class PartSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$types = Type::select('id')->pluck('id')->toArray();
		$vehicles = Vehicle::select('id')->pluck('id')->toArray();
		foreach ($types as $type) {
			foreach ($vehicles as $vehicle) {
				factory(Part::class, 2)->create([
					'vehicle_id' => $vehicle,
					'type_id' => $type,
				])->each(fn ($part) => \Illuminate\Support\Facades\Redis::zincrby('popular_parts', rand(1, 100), $part->id));
			}
		}
	}
}
