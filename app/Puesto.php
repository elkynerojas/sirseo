<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{

	protected $table = 'puestos';
	protected $fillable = [
		'id', 'nombre', 'direccion', 'telefono', 'email', 'descripcion', 'tipo_puesto_id'
	];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function tipos_puesto()
    {
        return $this
        ->belongsTo('App\Tipo_puesto')
        ->withTimestamps();
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function minuta()
    {
        return $this->hasMany(Minuta::class);
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
    public function elementos()
    {
        return $this->hasMany(Elemento::class);
    }
}
