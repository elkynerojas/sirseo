<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_puesto extends Model
{
    protected $table = 'tipos_puesto';

    protected $fillable = [
    	'id', 'nombre', 'descripcion'
    ];

    public function puestos()
	{
	    return $this
	        ->hasMany('App\Puesto')
	        ->withTimestamps();
	}
}
