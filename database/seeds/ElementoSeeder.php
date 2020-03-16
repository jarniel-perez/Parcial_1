<?php

use Illuminate\Database\Seeder;

class ElementoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //  factory(App\Elemento::class, 5)->create();

       $concesionarios = factory(App\Concesionario::class, 3)
        ->create()
        ->each(function ($concesionario){
          $automovil=factory(App\Automovil::class)->make();
          $concesionario->automovils()->save($automovil);
          $automovil->elementos()->save(factory(App\Elemento::class)->make());
        });
    }
}
