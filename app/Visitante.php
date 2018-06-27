<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitante extends Model
{
    protected $table = 'visitantes';

    protected $fillable = [
    	'id','documento','nombre','apellido','fecha','entrada','salida','estado', 'detalles','user_id'
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    } 
}
