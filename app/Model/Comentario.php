<?php

namespace Enufproject\Model;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $table = 'cometarios';
    protected $primarykey = 'id';
    protected $filleble = 
    [
        'id','asunto','comentario','fecha'
    ];
}
