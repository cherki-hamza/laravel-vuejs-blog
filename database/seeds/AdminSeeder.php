<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Profile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'remember_token' => Str::random(10),
            'role' => 'admin',
            'status'=> 1,
        ]);

        Profile::create([
            'about'=> $faker->text(10),
            'picture' => 'https://source.unsplash.com/random',
            'facebook' => 'facebook.com/'.$faker->name,
            'instagram' => 'instagram.com/'.$faker->name,
            'github' => 'github.com/'.$faker->name,
            'twitter' => 'twitter.com/'.$faker->name,
            'website' => $faker->company.'.com',
            'tel' => $faker->phoneNumber,
            'job'=> $faker->randomElement(['developer','designer','full stack','manager','staff','human resource','blogger']),

        ]);
    }
}
