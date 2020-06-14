<?php

declare(strict_types=1);

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->clearSearchIndexes();
		$this->cleanupStorage();
		$this->call(UserSeeder::class);
		$this->call(VehicleSeeder::class);
	}

	/**
	 * Clear search indexes.
	 *
	 * Calls scout flush artisan command
	 *
	 **/
	private function clearSearchIndexes(): void
	{
		Artisan::call('scout:flush App\\\Vehicle');
		Artisan::call('scout:flush App\\\Part');
	}

	/**
	 * Cleanup storage before seeding.
	 *
	 * Delete and recreate storage directories
	 *
	 **/
	public function cleanupStorage(): void
	{
		Storage::disk('public')->deleteDirectory('parts');
		Storage::disk('public')->makeDirectory('parts');
		Storage::disk('public')->deleteDirectory('avatars');
		Storage::disk('public')->makeDirectory('avatars');
	}
}
