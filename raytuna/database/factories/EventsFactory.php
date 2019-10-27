<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Event::class, function (Faker $faker) {
    return [
        'event_user_id'           => $faker->numberBetween(1, 10),
        'status'                  => $faker->numberBetween(1, 3),
        'title'                   => $faker->sentence(1),
        'event_datetime'          => $faker->dateTimeThisYear(),
        'place_name'              => $faker->unique()->secondaryAddress,
        'event_numbers'           => $faker->numberBetween(1, 10),
        'entry_fee'               => $faker->numberBetween(0, 1),
        'recruitment_information' => $faker->paragraph(),
        'event_img_name'          => 'event_img.png',
        'created_at'              => now(),
        'updated_at'              => now(),
    ];
});
