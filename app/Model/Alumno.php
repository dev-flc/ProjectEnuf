<?php

namespace Enufproject\Model;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table ='alumno';
    protected $primarykey='id';
    protected $filleble=
    [
        'id','matricula','status','semestre','id_usuario','id_direccion','id_escuela','id_tutor'
    ];

    public function usuario()
    {
        return $this->hasOne('Enufproject\Model\Usuario');
    }
    public function usualumno()
    {
    	return $this->belongsTo('Enufproject\Model\UsuAlum');
    }

    public function escuela()
    {
        return $this->belongsTo('Enufproject\Model\Escuela');
    }

    public function tutor()
    {
        return $this->hasOne('Enufproject\Model\Tutor');
    }
    
}

?>