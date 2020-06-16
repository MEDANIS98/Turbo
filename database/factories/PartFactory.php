<?php

declare(strict_types=1);

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Part;
use Faker\Generator as Faker;

$factory->define(Part::class, fn (Faker $faker) => [
	'image' => 'parts/' . $faker->file(
		$sourceDir = 'data/parts',
		$targetDir = storage_path('/app/public/parts'),
		false
	),
	'title' => $faker->realText(20),
	'description' => $faker->realText(100),
	'price' => $faker->randomFloat(2, 1000, 10000),
]);
