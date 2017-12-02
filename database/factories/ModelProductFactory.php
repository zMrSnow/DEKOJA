<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        "name" => $faker->word,
        "detail" => $faker->paragraph,
        "price" => $faker->numberBetween(1, 100),
        "stock" => $faker->randomDigit
    ];
});
