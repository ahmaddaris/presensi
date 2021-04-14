<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1.10) as $index) {
            DB::table('users')->insert ([
                'name' => $faker->word,
                'email' => $faker->email,
                'password' => bcrypt('secret')
            ]);
        }
    }
}
