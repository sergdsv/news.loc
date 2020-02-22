<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now');
    return [
        'title' => $faker->sentence(5),
        'body' => $faker->text(700),
        'created_at' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now')
    ];
});
