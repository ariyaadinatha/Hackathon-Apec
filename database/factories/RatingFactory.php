<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rating;
use Faker\Generator as Faker;

$factory->define(Rating::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 0, $max = 9),
        'umkm_id' => $faker->numberBetween($min = 0, $max = 9),
        'comment' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'star' => $faker->numberBetween($min = 0, $max = 5),
    ];
});
