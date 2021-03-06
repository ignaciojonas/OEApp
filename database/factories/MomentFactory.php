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
        'briefDescription' => $faker->word,
        'procedure' => $faker->word,
        'forecastDevelopment' => $faker->text,
        'teachers_record_id' => factory(App\Record::class)->create()->id,
        'resourceStudents' => $faker->text,
        'classroom_record_id' => factory(App\Record::class)->create()->id
    ];
});
