<?php

use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programs')->insert([
            'mahad_id' => rand(1,4),
            'name' => Str::random(10),
            'status' => $faker->randomElement(['sedang berjalan', 'segera', 'selesai']),
        ]);
    }
}
