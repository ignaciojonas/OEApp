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

$factory->define(App\Moment::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'description' => $faker->word,
        'procedure' => $faker->word,
        'developmentForecast' => $faker->text,
        'registrationTeacher' => $faker->text,
        'resourcesStudent' => $faker->text,
        'classroomRecord' => $faker->text
    ];
});
