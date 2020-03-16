<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(ConcesionarioSeeder::class);
        // $this->call(AutomovilSeeder::class);
         $this->call(ElementoSeeder::class);
    }
}
