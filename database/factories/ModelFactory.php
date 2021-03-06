<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Author::class, function (Faker\Generator $faker) {
    return [
        'gender' => $gender = $faker->randomElement(['male', 'female']),
        'name' => $faker->name($gender),
        'country' => $faker->country,
    ];
});