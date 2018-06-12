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
		    'name' => 'Elkin Rojas',
		    'email' => 'rojaselkin1@gmail.com',
		    'password' => bcrypt('12345'), 
		    'remember_token' => 'nsshdyewiowkmcnsbhhj' 
	    ]);
    }
}
