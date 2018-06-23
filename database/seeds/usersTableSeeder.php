<?php

use Illuminate\Database\Seeder;
use App\Rol;
use App\User;
class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Rol::where('name', 'user')->first();
        $role_admin = Rol::where('name', 'admin')->first();

         

            $user = new User();
            $user->nombre = 'Elkin';
            $user->apellido = 'Rojas';
            $user->direccion = 'Cra 1 # 11-87';
            $user->telefono = '3182204190';
            $user->email = 'rojaselkin1@gmail.com';
            $user->password = bcrypt('12345');
            $user->puesto_id = '1';
            $user->save();
            $user->roles()->attach($role_user);

            $user = new User();
            $user->nombre = 'Pedro';
            $user->apellido = 'Perez';
            $user->direccion = 'Cra 1 # 11-87';
            $user->telefono = '3182204190';
            $user->email = 'pedrop@gmail.com';
            $user->password = bcrypt('12345');
            $user->puesto_id = '1';
            $user->save();
            $user->roles()->attach($role_user);

            $user = new User();
            $user->nombre = 'Admin';
            $user->apellido = 'User';
            $user->direccion = 'Cra 1 # 11-87';
            $user->telefono = '3182204190';
            $user->email = 'admin@gmail.com';
            $user->password = bcrypt('12345');
            $user->puesto_id = '1';
            $user->save();
            $user->roles()->attach($role_admin); 
	    
    }
}
