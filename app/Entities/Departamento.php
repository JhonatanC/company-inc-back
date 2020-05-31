<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $fillable = [
    	'name',
    	'code'
    ];
}
