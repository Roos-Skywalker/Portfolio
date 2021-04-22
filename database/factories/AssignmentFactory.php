<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Assignment;
use Faker\Generator as Faker;

$factory->define(Assignment::class, function (Faker $faker) {
    return [
        'blok' => $faker->numberBetween(1,4),
        'cursus' => $faker->word,
        'toets' => $faker->word,
        'weging' => $faker->numberBetween(0,100),
        'ec' => $faker->numberBetween(0,20),
        'cijfer' => $faker->numberBetween(1,10)
    ];
});
