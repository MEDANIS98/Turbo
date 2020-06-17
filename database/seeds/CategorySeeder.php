<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		factory(Category::class, rand(8, 12))
			->create()
			->each(fn ($category) => $category->categories()
				->createMany(factory(Category::class, rand(0, 12))->make()->toArray()));
	}
}
