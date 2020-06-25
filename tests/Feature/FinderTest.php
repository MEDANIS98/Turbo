<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Brand;
use App\Vehicle;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class FinderTest extends TestCase
{
	use DatabaseMigrations;

	/**
	 * Test get brands by year.
	 *
	 * Assert correct API response
	 *
	 * @return void
	 */
	public function test_brands_by_year()
	{
		$brand = factory(Brand::class)->create();
		$vehicle = factory(Vehicle::class)->create(['brand_id' => $brand->id]);
		$response = $this->post('/api/getYearBrands', [
			'year' => $vehicle->year,
		]);
		$response->assertStatus(200);
	}
}
