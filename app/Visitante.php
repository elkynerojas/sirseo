<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitante extends Model
{
    protected $table = 'visitantes';

    protected $fillable = [
    	'id','documento','nombre','apellido','entrada','salida','estado','user_id'
    ];

    public function users(){
    	return $this->belongsTo('App\User');
    } 
}
