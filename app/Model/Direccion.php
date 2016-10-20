<?php

namespace enufproject\Model;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $table = 'direcion';
    protected $primarykey = 'id';
    protected $filleble = 
    [
        'id','calle','num_ext','estado','ciudad','colonia','cp'
    ];
}
