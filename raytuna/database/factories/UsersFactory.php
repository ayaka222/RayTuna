<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\User::class, function (Faker $faker) {
    $user_name = $faker->unique()->userName;
    return [
        'name'       => $user_name,
        'email'      => $user_name . '@example.com',
        'password'   => \Hash::make('password'),
        'gender'     => $faker->numberBetween(0, 1),
        'dog_types'  => $faker->unique()->userName,
        'dog_name'   => $faker->unique()->userName,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
