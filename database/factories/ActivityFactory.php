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

$factory->define(App\Activity::class, function (Faker $faker) {

    return [
        'procedure' => $faker->word,
        'suggestions' => $faker->text,
        'achievementExpectation' => $faker->text,
        'implementationResult' => $faker->text
    ];
});
