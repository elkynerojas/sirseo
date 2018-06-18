<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{

	protected $table = 'puestos';
	protected $fillable = [
		'id', 'nombre', 'direccion', 'telefono', 'email', 'descripcion', 'tipo_puesto_id'
	];

    public function tipos_puesto()
    {
        return $this
        ->belongsTo('App\Tipo_puesto')
        ->withTimestamps();
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function scopeWith_Tipo_Puesto($query){
        return $query
        ->join('tipos_puesto','tipos_puesto.id','=','puestos.tipo_puesto_id')
        ->orderBy('puestos.nombre','DESC')
        ->select(
            'puestos.id as id',
            'puestos.nombre as nombre',
            'puestos.direccion as direccion',
            'puestos.telefono as telefono',
            'puestos.email as email',
            'tipos_puesto.id as tipo_puesto_id',
            'tipos_puesto.nombre as tipo_puesto_nombre'
        );
    }
}
