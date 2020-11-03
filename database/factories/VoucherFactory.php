<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Voucher;
use Faker\Generator as Faker;

$factory->define(Voucher::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'description' => $faker->paragraph(1),
        'price' => $faker->numberBetween($min = 10, $max = 20),
    ];
});
