<?php

namespace App\modulos\proyectos\models;

use Illuminate\Database\Eloquent\Model;
use App\modulos\proyectos\observer\proyectoCreateObserve;

class Proyecto extends Model
{
    protected $table = 'proyectos';
    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'user_id',
        'cantidad_personas',
        'estado',
    ];

    protected static function boot()
    {
        parent::boot();
        self::observe(proyectoCreateObserve::class);
    }
}
