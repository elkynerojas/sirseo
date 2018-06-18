<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
	protected $table = 'roles';
    protected $fillable = [
    	'id', 'name', 'description'
    ];

    public function users()
	{
	    return $this
	        ->belongsToMany('App\User')
	        ->withTimestamps();
	}
}
