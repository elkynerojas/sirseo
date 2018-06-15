<?php

use Illuminate\Database\Seeder;
use App\Rol;

class rolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Rol();
        $role->name = 'admin';
        $role->description = 'Administrator';
        $role->save();
        $role = new Rol();
        $role->name = 'user';
        $role->description = 'User';
        $role->save();
    }
}
