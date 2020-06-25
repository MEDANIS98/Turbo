<?php

declare(strict_types=1);

use App\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class BrandSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Storage::disk('public')->deleteDirectory('brands');
		Storage::disk('public')->makeDirectory('brands');
		require_once dirname(__FILE__) . '/data/brands.php';
		foreach ($brands as $name => $country) {
			copy(
				base_path("data/brands/$name.png"),
				storage_path("app/public/brands/$name.png")
			);
			Brand::create([
				'name' => $name,
				'country' => $country,
				'logo' => "brands/$name.png",
			]);
		}
	}
}
