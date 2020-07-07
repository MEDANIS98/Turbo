<?php

declare(strict_types=1);

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
	return [
		'name' => $faker->name,
		'content' => $faker->text,
		'rating' => rand(0, 5),
	];
});
