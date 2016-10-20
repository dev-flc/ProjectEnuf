<?php

namespace enufproject\Model;

use Illuminate\Database\Eloquent\Model;

class Archivos extends Model
{
    protected $table = 'archivos';
    protected $primarykey = 'id';
    protected $filleble = 
    [
        'id','nombre','fecha'
    ];
}
