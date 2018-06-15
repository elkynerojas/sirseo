<?php

use Illuminate\Database\Seeder;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         App\User::create([
		    'nombre' => 'Elkin Rojas',
            'apellido' => 'Rojas Lizcano',
            'direccion' => 'Cra 1a # 11-87 Pamplona',
            'telefono'  => '3182204190',
 		    'email' => 'rojaselkin1@gmail.com',
		    'password' => bcrypt('12345'), 
		    'remember_token' => 'nsshdyewiowkmcnsbhhj' 
	    ]);
    }
}
