<?php

use Faker\Generator as Faker;

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

$factory->define(App\TeachingObject::class, function (Faker $faker) {

    return [
        'title' => $faker->sentence,
        'theme' => $faker->sentence,
        'content' => $faker->text,
        'goal' => $faker->text,
        'approach' => $faker->text,
        'recipients'=> $faker->text,
        'date' => $faker->dateTime,
        'place' => $faker->city,
    ];
});
