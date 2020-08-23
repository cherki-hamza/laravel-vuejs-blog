<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
         $this->call(UserProfileTableseed::class);
         $this->call(CategoryTableSeed::class);
         $this->call(PostSeeder::class);
         $this->call(CommentsTableSeed::class);
         //$this->call(AdminSeeder::class);
    }
}
