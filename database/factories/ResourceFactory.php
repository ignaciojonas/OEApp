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

$factory->define(App\Resource::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'type' => $faker->text,
        'link' => $faker->url,
        'geogebra_type' => '3d',
        'geogebra_id' => 'ZT6xkDYM'
    ];
});
