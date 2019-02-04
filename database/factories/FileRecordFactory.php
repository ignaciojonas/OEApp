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

$factory->define(App\FileRecord::class, function (Faker $faker) {

    return [
        'record_id' => factory(App\Record::class)->create()->id,
        'file_id' => factory(App\File::class)->create()->id
    ];
});
