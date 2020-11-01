<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Umkm;
use Faker\Generator as Faker;

$factory->define(Umkm::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'user_id' => $faker->numberBetween($min = 0, $max = 9),
        'category_id' => $faker->numberBetween($min = 0, $max = 9),
        'description' => $faker->paragraph(1),
    ];
});
