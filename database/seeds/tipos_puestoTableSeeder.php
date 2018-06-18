<?php

use Illuminate\Database\Seeder;
use App\Tipo_puesto;

class tipos_puestoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo_puesto = new Tipo_puesto();
        $tipo_puesto->nombre = 'Vigilancia';
        $tipo_puesto->descripcion = 'Lugar Vigilado por personal de guardas';
        $tipo_puesto->save();
        
        $tipo_puesto = new Tipo_puesto();
        $tipo_puesto->nombre = 'Central de Radios';
        $tipo_puesto->descripcion = 'Sede de la empresa donde se reciben y se tramitan solicitudes';
        $tipo_puesto->save();

    }
}
