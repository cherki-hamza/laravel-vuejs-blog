<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence(rand(3,6));
    return [
        'title'=> $title,
        'slug'=> Str::slug($title),
        'body'=> $faker->paragraph(rand(50,200)),
        'user_id'=> $faker->randomDigit(1,10),
        'category_id'=> $faker->randomDigit(1,10),
    ];
});
