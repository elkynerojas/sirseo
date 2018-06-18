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
}
