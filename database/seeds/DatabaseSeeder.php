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
        $this->call(MahadSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(UserSeeder::class);

    }
}
