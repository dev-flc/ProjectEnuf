<?php

namespace enufproject\Model;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $table='tutor';
    protected $primarykey='id';
    protected $filleble=[
    	'id','nombre','apellidos','email'
    	 ];

    public function alumno()
    {
        return $this->belongsTo('enufproject\Model\Alumno');
    }
}
