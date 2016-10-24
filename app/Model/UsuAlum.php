<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UsuAlum extends Model
{
    protected $table='usualum';
    protected $filleble=
    [
    	'id_usuario','id_alumno'
    ];

    public function alumnos()
    {
    	return $this->hasMany('Enufproject\Model\Alumno');
    }

    public function usuarios()
    {
    	return $this->hasMany('Enufproject\Model\Usuario');
    }



}
