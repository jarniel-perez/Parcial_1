<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Concesionario;
use Faker\Generator as Faker;

$factory->define(App\Concesionario::class, function (Faker $faker) {
    return [
      'nombre' => $faker->name,
      'ciudad' => $faker->city,
      'direccion' => $faker->Address,
      'telefono' => $faker->randomNumber,
      'email' => $faker->unique()->safeEmail,
    ];
});
