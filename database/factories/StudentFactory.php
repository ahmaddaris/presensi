<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'wa' => $faker->PhoneNumber,
        'address' => $faker->address,
        'detail' => $faker->sentences,
        'created_at' => $faker->DateTime,
        'updated_at' => $faker->DateTime
        ];
});
