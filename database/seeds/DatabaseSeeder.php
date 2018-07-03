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
    	$this->call(rolesTableSeeder::class);
        $this->call(tipos_puestoTableSeeder::class);
        $this->call(puestosTableSeeder::class);
        $this->call(usersTableSeeder::class);
        $this->call(tipos_elementoTableSeeder::class);
    }
}
