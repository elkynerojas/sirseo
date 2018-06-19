<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Minuta extends Model
{
    protected $table = 'minuta';

    protected $fillable = [
    	'id', 'fecha', 'hora', 'asunto', 'extracto', 'anotacion', 'user_id'
    ];

    public function users()
    {
    	return $this->belongsTo('App\users');
    }

    public function scopeWith_puesto($query){
    	return $query
    	->join('users','minuta.user_id','=','users.id')
    	->join('puestos','users.puesto_id','=','puestos.id')
    	->select(
    		'users.nombre as user_nombre',
    		'users.apellido as user_apellido',
    		'puestos.id as puesto_id',
    		'puestos.nombre as puesto_nombre',
    		'minuta.fecha as fecha',
            'minuta.hora as hora',
            'minuta.asunto as asunto',
            'minuta.extracto as extracto',
            'minuta.anotacion as anotacion'
    	);
    }
}
