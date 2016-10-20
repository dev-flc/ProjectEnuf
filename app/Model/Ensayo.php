<?php

namespace enufproject\Model;

use Illuminate\Database\Eloquent\Model;

class Ensayo extends Model
{
    protected $table='ensayo';
    protected $primarykey='id';

    protected $filleble=[
    	'id','nombre','fecha','descripcion'
    	 ];
}
