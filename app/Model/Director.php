<?php

namespace Enufproject\Model;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $table='director';
    protected $primarykey='id';

    protected $filleble=[
    	'id','nombre','apellidos','email'
    	 ];
}
