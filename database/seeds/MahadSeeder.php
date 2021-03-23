<?php

use Illuminate\Database\Seeder;

class MahadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Mahad::create([
            'name' => 'Ma\'had Umar bin Khatthab'
        ]);
        App\Mahad::create([
            'name' => 'Kampus Tahfizh'
        ]);
        App\Mahad::create([
            'name' => 'Ma\'had Al \'Ilmi'
        ]);
        App\Mahad::create([
            'name' => 'Ma\'had Yaa Abati'
        ]);

    }
}