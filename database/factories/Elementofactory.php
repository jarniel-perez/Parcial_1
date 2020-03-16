<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Elemento;
use App\Automovil;
use Faker\Generator as Faker;

$factory->define(App\Elemento::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word,
        'serie' => $faker->randomDigit,
        'ciudad_origen' => $faker->city,
        'caracteristicas' => ["color" =>$faker->colorName(),
        "material" =>$faker->name,],
        'automovil_id' => function (){
          return factory(App\Automovil::class)->create()->id;
        }
          //App\Automovil::inRandomOrder()->value('id'),
    ];
});
