<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $fillable = [
    	'departamento_id',
    	'code',
    	'name'
    ];

    public function departamento(){
    	return $this->belongsTo('App\Entities\Departamento','departamento_id');
    }

}
