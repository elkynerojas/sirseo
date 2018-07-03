<?php

use Illuminate\Database\Seeder;
use App\Tipo_elemento;
class tipos_elementoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo_elemento = new Tipo_elemento();
        $tipo_elemento->nombre = 'Computador Portatil';
        $tipo_elemento->save();

        $tipo_elemento = new Tipo_elemento();
        $tipo_elemento->nombre = 'Computador de Escritorio';
        $tipo_elemento->save();

        $tipo_elemento = new Tipo_elemento();
        $tipo_elemento->nombre = 'Tablet';
        $tipo_elemento->save();

        $tipo_elemento = new Tipo_elemento();
        $tipo_elemento->nombre = 'Video Beam';
        $tipo_elemento->save();

        $tipo_elemento = new Tipo_elemento();
        $tipo_elemento->nombre = 'Báscula';
        $tipo_elemento->save();

        $tipo_elemento = new Tipo_elemento();
        $tipo_elemento->nombre = 'Tallímetro';
        $tipo_elemento->save();

        $tipo_elemento = new Tipo_elemento();
        $tipo_elemento->nombre = 'Parlante';
        $tipo_elemento->save();

        $tipo_elemento = new Tipo_elemento();
        $tipo_elemento->nombre = 'Micrófono';
        $tipo_elemento->save();

        $tipo_elemento = new Tipo_elemento();
        $tipo_elemento->nombre = 'Diadema Multimedia';
        $tipo_elemento->save();

        $tipo_elemento = new Tipo_elemento();
        $tipo_elemento->nombre = 'Teatro en casa';
        $tipo_elemento->save();

        $tipo_elemento = new Tipo_elemento();
        $tipo_elemento->nombre = 'Sillas';
        $tipo_elemento->save();

        $tipo_elemento = new Tipo_elemento();
        $tipo_elemento->nombre = 'Escritorio';
        $tipo_elemento->save();

        $tipo_elemento = new Tipo_elemento();
        $tipo_elemento->nombre = 'Otro';
        $tipo_elemento->save();
    }
}
