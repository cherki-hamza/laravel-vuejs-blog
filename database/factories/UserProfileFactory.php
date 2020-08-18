<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt('123456789'),
    ];
});

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'about'=> $faker->text(50),
        'picture' => 'https://source.unsplash.com/random',
        'facebook' => 'facebook.com/'.$faker->name,
        'instagram' => 'instagram.com/'.$faker->name,
        'github' => 'github.com/'.$faker->name,
        'twitter' => 'twitter.com/'.$faker->name,
        'website' => $faker->company.'.com',
        'tel' => $faker->phoneNumber,
        'job'=> $faker->randomElement(['developer','designer','full stack','manager','staff','human resource','blogger']),
    ];
});
