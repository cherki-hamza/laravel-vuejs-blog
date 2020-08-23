<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Profile;

class UserProfileTableseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class , 5)->create()->each(function ($user){
            $profile = factory(App\Profile::class)->make();
            $user->profile()->save($profile);
        });

    }
}
