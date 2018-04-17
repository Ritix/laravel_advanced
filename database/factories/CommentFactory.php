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
        'deleted_at' => $faker->dateTime,
    ];
});

$factory
    ->state(\App\Models\Post::class, 'with_comments', [])
    ->afterCreatingState(\App\Models\Post::class, 'with_comments', function ($post, $faker) {
        factory(\App\Models\Comment::class, random_int(0, 50))->create([
            'post_id' => $post->id,
            'user_id' => \App\Models\User::InRandomOrder()->first()->id,
        ]);
    });
