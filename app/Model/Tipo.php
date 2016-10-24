<?php

namespace Enufproject\Model;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table='tipo';
    protected $primarykey='id';
    protected $filleble=[
    	'id','tipo'
    	 ];
}
