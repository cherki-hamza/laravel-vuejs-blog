<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(\App\Comment::class, function (Faker $faker) {
    return [
        'body'=> $faker->paragraph(rand(1,3)),
        'user_id'=> $faker->randomDigit(1,10),
        'post_id'=> $faker->randomDigit(1,10),
    ];
});
