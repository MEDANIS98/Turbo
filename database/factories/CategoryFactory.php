<?php

declare(strict_types=1);

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, fn (Faker $faker) => [
	'name' => $faker->word,
	'image' => 'categories/' . $faker->file(
		$sourceDir = $_SERVER['HOME'] . '/Pictures/departments',
		$targetDir = storage_path('/app/public/categories'),
		false
	),
]);
