<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Agente extends Model
{
    protected $fillable = [
    	'cedula',
    	'name'
    ];
}
