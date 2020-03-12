<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyectos';
    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'user_id',
    ];
}
