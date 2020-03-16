<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Automovil;
use Faker\Generator as Faker;

$factory->define(App\Automovil::class, function (Faker $faker) {
  return [
      'marca' => $faker->unique()->randomElement(['ford','bmw','nissan','porshe','toyota','chevrolet','mazda',
      'mercedes','audi','ferarri']),
      'modelo' => $faker->randomElement(['2018','2019','2020','2021']),
      'tipo' => $faker->word,
      'ciudad_origen' => $faker->city,
      'matricula' => $faker->bothify('Hello ##??'),
      'en_venta' => $faker->boolean(),
      'concesionario_id' =>  function (){
        return factory(App\Concesionario::class)->create()->id;
      },
      //App\Concesionario::inRandomOrder()->value('id'),
    ];
});
