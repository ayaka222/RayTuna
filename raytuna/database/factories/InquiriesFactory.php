<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Inquiry::class, function (Faker $faker) {
    return [
        'event_id'   => $faker->numberBetween(1, 10),
        'user_id'    => $faker->numberBetween(1, 10),
        'title'      => $faker->sentence(1),
        'content'    => $faker->paragraph(),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
