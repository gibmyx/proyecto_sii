<?php

namespace App\modulos\proyectos\models;

use Illuminate\Database\Eloquent\Model;

class proyectoMiembros extends Model
{
    protected $table = 'proyecto_miembros';
    protected $fillable = [
        'id',
        'proyecto_id',
        'user_id',
    ];

}