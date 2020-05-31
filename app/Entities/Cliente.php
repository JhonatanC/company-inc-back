<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
    	'firtsname',
    	'lastname',
    	'phone',
    	'adress',
        'deparment',
    	'city',
    	'agente_id'
    ];

    public function agente(){
    	return $this->belongsTo('App\Entities\Agente','agente_id');
    }
}
