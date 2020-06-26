<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Brand;
use App\Vehicle;
use Tests\TestCase;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SearchTest extends TestCase
{
	use DatabaseMigrations;

	public function setUp(): void
	{
		parent::setUp();
		Storage::disk('public')->deleteDirectory('brands');
		Storage::disk('public')->makeDirectory('brands');
	}

	/**
	 * Test users can search for parts
	 * of a given vehicle criteria.
	 *
	 * @return void
	 */
	public function test_vehicle_parts_search()
	{
		$this->withoutExceptionHandling();
		Vehicle::withoutSyncingToSearch(function () {
			$brand = factory(Brand::class)->create();
			$vehicle = factory(Vehicle::class)->create(['brand_id' => $brand->id]);
			$response = $this->post('/search', [
				'year' => $vehicle->year,
				'brand' => $brand->id,
				'model' => $vehicle->model,
				'fuel' => $vehicle->fuel,
			]);
			$response->assertOk();
		});
	}
}
