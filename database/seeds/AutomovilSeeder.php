<?php

use Illuminate\Database\Seeder;

class AutomovilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Automovil::class, 10)->create();
    }
}
