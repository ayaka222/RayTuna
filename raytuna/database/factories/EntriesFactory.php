<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Entry::class, function (Faker $faker) {
    return [
        'event_id'   => $faker->numberBetween(1, 10),
        'user_id'    => $faker->numberBetween(1, 10),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
