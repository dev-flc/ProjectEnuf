<?php

namespace enufproject\Model;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    protected $table='escuela';
    protected $primarykey='id';
    protected $filleble=[
    	'id','nombre','telefono','fax','email','id_direccion'
    	 ];

   	public function alumnos()
    {
    	return $this ->hasMany('enufproject/Model/Alumno');
    }
}
