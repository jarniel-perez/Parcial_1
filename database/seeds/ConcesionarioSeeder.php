<?php

use Illuminate\Database\Seeder;

class ConcesionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Concesionario::class, 5)->create();


    }
}
