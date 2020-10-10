<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Siswa;
use Faker\Generator as Faker;

$factory->define(Siswa::class, function (Faker $faker) {
    return [
        'nama_siswa'    =>  $faker->name,
        'email'         =>  $faker->safeEmail,
        'alamat'        =>  $faker->address
    ];
});
