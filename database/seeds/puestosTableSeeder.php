<?php

use Illuminate\Database\Seeder;
use App\Puesto;

class puestosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $puesto = new Puesto();
        $puesto->nombre = 'ICBF';
        $puesto->direccion = 'Cra 5 # 7-85';
        $puesto->telefono ='5681412';
        $puesto->email = 'icbfpamplona@icbf.gov.co';
        $puesto->descripcion = 'Centro Zonal Pamplona';
        $puesto->tipo_puesto_id = '1';
        $puesto->save();
    }
}
