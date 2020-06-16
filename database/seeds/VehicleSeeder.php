<?php

declare(strict_types=1);

use App\Part;
use App\Type;
use App\Vehicle;
use App\Category;
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
		factory(Category::class)->create()->each(function ($category) {
			factory(Category::class)->create(['category_id' => $category->id])->each(function ($sub_category) {
				factory(Type::class)->create(['category_id' => $sub_category->id])->each(function ($type) {
					factory(Vehicle::class)->create()->each(
						fn ($vehicle) => factory(Part::class, 2)->create([
							'vehicle_id' => $vehicle->id,
							'type_id' => $type->id,
						])
					);
				});
			});
		});
	}
}
