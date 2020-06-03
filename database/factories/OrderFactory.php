<?php

declare(strict_types=1);

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, fn (Faker $faker) => [
    'total' => $faker->randomFloat($decimals = 2, $min = 20, $max = 100000),
    'number_of_items' => $faker->randomDigitNotNull(),
]);
