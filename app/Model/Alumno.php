<?php

namespace enufproject\Model;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table ='alumno';
    protected $primarykey='id';
    protected $filleble=
    [
        'id','matricula','status','semestre','id_usuario','id_direccion','id_escuela','id_tutor'
    ];

    public function usualumno()
    {
    	return $this->belongsTo('enufproject\Model\UsuAlum');
    }

    public function escuela()
    {
        return $this->belongsTo('enufproject\Model\Escuela');
    }

    public function tutor()
    {
        return $this->hasOne('enufproject\Model\Tutor');
    }
    
}

?>