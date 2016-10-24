<?php

namespace Enufproject\Model;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table='usuario';
    protected $primarykey='id';
    protected $filleble=[
    	'id','nombre','apellidos','sexo','tel','cel','email','contrasena','id_tipo','id_direccion'
    	 ];

   	public function alumno()
    {
    	return $this->belongsTo('Enufproject\Model\Alumno');
    }
   	public function usualumno()
    {
    	return $this->belongsTo('Enufproject\Model\UsuAlum');
    }
}
