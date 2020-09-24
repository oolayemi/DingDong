<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(App\Models\Projects::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1,10) ,
        'title' => $faker->title,
        'details' => $faker->sentence,
        'link' => $faker->url,
        'type' => $faker->randomElement(['mobile(android)', 'mobile(iOS)', 'web']),
        'image_link' => $faker->imageUrl(),
    ];
});
