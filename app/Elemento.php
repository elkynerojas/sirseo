<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Elemento extends Model
{
    protected $table = 'elementos';

    protected $fillable = [
    	'id',
        'nombre',
        'documento',
    	'fecha_entrada',
    	'hora_entrada',
    	'fecha_salida',
    	'hora_salida',
    	'tipo_elemento_id',
    	'marca',
    	'serial',
    	'tipo_propiedad',
    	'estado',
        'detalles',
    	'user_id',
        'puesto_id'
    ];

    public function tipo_elemento()
    {
    	return $this->belongsTo(Tipo_elemento::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function puesto()
    {
        return $this->belongsTo(Puesto::class);
    }
}
