<?php

namespace enufproject\Model;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table='usuario';
    protected $primarykey='id';
    protected $filleble=[
    	'id','nombre','apellidos','sexo','tel','cel','email','contrasena','id_tipo','id_direccion'
    	 ];

   	public function usualumno()
    {
    	return $this -> belongsTo('enufproject\Model\UsuAlum');
    }
}
