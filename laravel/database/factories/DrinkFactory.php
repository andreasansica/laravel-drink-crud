<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Drink;
use Faker\Generator as Faker;

$factory->define(Drink::class, function (Faker $faker) {
    return [
        'name' => $faker -> word(),
        'gradation' => $faker -> numberBetween(1,80),
        'price' => $faker -> numberBetween(10, 200)
    ];
});
