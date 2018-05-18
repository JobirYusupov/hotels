<?php

use Faker\Generator as Faker;

$factory->define(App\Hotel::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'info'=>$faker->text,
        'region_id'=>$faker->numberBetween(1, 12),
        'show'=>$faker->numberBetween(0, 30),
    ];
});
