<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Minuta extends Model
{
    protected $table = 'minuta';

    protected $fillable = [
    	'id', 'fecha', 'hora', 'asunto', 'extracto', 'anotacion', 'puesto_id', 'user_id'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    public function puesto()
    {
        return $this->belongsTo(Puesto::class);
    }
    public function scopeWith_puesto($query){
    	return $query
    	->join('users','minuta.user_id','=','users.id')
    	->join('puestos','users.puesto_id','=','puestos.id');
    }
}
