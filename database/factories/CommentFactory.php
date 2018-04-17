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

$factory->define(App\Models\Comment::class, function (Faker $faker) {
    return [
        'created_at' => $faker->dateTime,
        'content' => $faker->text,
        'user_id' => factory(\App\Models\User::class)->create()->id,
        'post_id' => factory(\App\Models\Post::class)->create()->id,
        'deleted_at' => $faker->dateTime,
    ];
});
