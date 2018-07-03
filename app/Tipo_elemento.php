<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_elemento extends Model
{
    protected $table = 'tipos_elemento';

    protected $fillable = [
    	'id','nombre'
    ];

    public function elementos()
    {
    	return $this->hasMany(Elemento::class);
    }
}
