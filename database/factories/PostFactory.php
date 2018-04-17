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

$factory->define(App\Models\Post::class, function (Faker $faker) {
    return [
        'created_at' => $faker->dateTime,
        'title' => $faker-> text(50),
        'content' => $faker->text,
        'annonymous_comments' => $faker->text,
        'user_id' => factory(\App\Models\User::class)->create()->id,
        'deleted_at' => $faker->dateTime,
        'slug' => $faker->slug,
    ];
});
